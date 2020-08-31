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

namespace Jetcoder\PCloud\Entity;

use JMS\Serializer\Annotation as Serializer;

class Folder extends Metadata
{
    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected int $folderid = 0;

    /**
     * @Serializer\Exclude()
     * @var Metadata[]
     */
    protected array $contents = [];

    /**
     * @return int
     */
    public function getFolderid(): int
    {
        return $this->folderid;
    }

    /**
     * @param int $folderid
     * @return Folder
     */
    public function setFolderid(int $folderid): Folder
    {
        $this->folderid = $folderid;
        return $this;
    }

    /**
     * @return array
     */
    public function getContents(): array
    {
        return $this->contents;
    }

    /**
     * @param array $contents
     * @return Folder
     */
    public function setContents(array $contents): Folder
    {
        $this->contents = $contents;
        return $this;
    }

    /**
     * @param Metadata $item
     * @return Folder
     */
    public function addItem(Metadata $item): Folder
    {
        foreach ($this->contents as $content) {
            if ($content->getId() == $item->getId()) {
                return $this;
            }
        }
        $this->contents[] = $item;
        return $this;
    }
}
