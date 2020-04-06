<?php

/**
 * Copyright (c) 2020. Jetcoder
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
 * @author Louis Nguyen <louis.nguyen@jetcoder.net>
 * Date: 06/04/2020
 */

declare(strict_types=1);

namespace Jetcoder\PCloud\Service;

use Jetcoder\PCloud\Entity\UploadLink;

class UploadLinkService extends BaseService
{
    public const CREATE_UPLOAD_LINK_URI = 'createuploadlink';
    public const GET_UPLOAD_LINK_URI = 'listuploadlinks';

    public function createUploadLink(UploadLink $uploadLink): ?UploadLink
    {
        $data = [
            'folderid' => $uploadLink->getFolderid(),
            'comment' => $uploadLink->getComment(),
            'expire' => $uploadLink->getExpire(),
            'maxspace' => $uploadLink->getMaxspace(),
            'maxfiles' => $uploadLink->getMaxfiles(),
        ];
        $this->serviceUri = self::CREATE_UPLOAD_LINK_URI;
        /** @var array $res */
        $res = $this->post($data, [], true);
        if ($res['result'] == 0) {
            $uploadLink->setCode($res['code']);
            $uploadLink->setUploadlinkid($res['uploadlinkid']);
            $uploadLink->setLink($res['link']);
            return $uploadLink;
        }
        return null;
    }

    /**
     * @return UploadLink[]
     */
    public function getUploadLinks(): array
    {
        $this->serviceUri = self::GET_UPLOAD_LINK_URI;
        /** @var array $res */
        $res = $this->get([], true);
        $uploadLinks = [];
        if ($res['result'] == 0) {
            foreach ($res['uploadlinks'] as $data) {
                $json = json_encode($data);
                if ($json) {
                    /** @var UploadLink $uploadLink */
                    $uploadLink = $this->serializer->deserialize($json, UploadLink::class, 'json');
                    $uploadLinks[] = $uploadLink;
                }
            }
        }
        return $uploadLinks;
    }
}
