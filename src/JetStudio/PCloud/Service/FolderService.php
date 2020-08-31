<?php

/**
 * Copyright (c) 2020. Jet Studio
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

/**
 * Project pcloud
 * @author Louis Nguyen <louis.nguyen@jetstudio.io>
 * Date: 06/04/2020
 */

declare(strict_types=1);

namespace Jetcoder\PCloud\Service;

use Jetcoder\PCloud\Entity\File;
use Jetcoder\PCloud\Entity\Folder;

class FolderService extends BaseService
{
    public const CREATE_FOLDER_URI = 'createfolder';
    public const LIST_FOLDER_URL = 'listfolder';

    /**
     * @deprecated This method is discouraged so mark it as deprecated
     * @param string $path
     * @return Folder|null
     */
    public function createFolderByPath(string $path): ?Folder
    {
        $this->serviceUri = self::CREATE_FOLDER_URI;
        /** @var array $res */
        $res = $this->get(['path' => $path], true);
        // If there is no error
        return $this->createFolderFromResponse($res);
    }

    /**
     * @param string $name
     * @param int $folderId
     * @return Folder|null
     */
    public function createFolderById(string $name, int $folderId): ?Folder
    {
        $this->serviceUri = self::CREATE_FOLDER_URI;
        /** @var array $res */
        $res = $this->get(['folderid' => $folderId, 'name' => $name], true);
        return $this->createFolderFromResponse($res);
    }

    public function listOfFolder(int $folderId): ?Folder
    {
        $this->serviceUri = self::LIST_FOLDER_URL;
        /** @var array $res */
        $res = $this->get(['folderid' => $folderId], true);
        return $this->createFolderFromResponse($res);
    }

    protected function createFolderFromResponse(array $res): ?Folder
    {
        // If there is no error
        if ($res['result'] == 0) {
            $json = json_encode($res['metadata']);
            if ($json) {
                /** @var Folder $folder */
                $folder = $this->serializer->deserialize($json, Folder::class, 'json');

                if (!empty($res['metadata']['contents'])) {
                    $this->loadFolderContent($res['metadata']['contents'], $folder);
                }
                return $folder;
            }
        }
        return null;
    }

    protected function loadFolderContent(array $res, Folder $folder): void
    {
        foreach ($res as $data) {
            $json = json_encode($data);
            if ($json) {
                $metadata = null;
                if ($data['isfolder']) {
                    $metadata = $this->serializer->deserialize($json, Folder::class, 'json');
                } else {
                    $metadata = $this->serializer->deserialize($json, File::class, 'json');
                }
                $folder->addItem($metadata);
            }
        }
    }
}
