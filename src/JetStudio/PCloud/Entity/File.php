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

class File extends Metadata
{
    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected int $fileid = 0;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected string $contenttype = '';

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected string $hash = '';

    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected bool $thumb = false;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected int $category = 0;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected int $size = 0;

    /**
     * @return int
     */
    public function getFileid(): int
    {
        return $this->fileid;
    }

    /**
     * @param int $fileid
     * @return File
     */
    public function setFileid(int $fileid): File
    {
        $this->fileid = $fileid;
        return $this;
    }

    /**
     * @return string
     */
    public function getContenttype(): string
    {
        return $this->contenttype;
    }

    /**
     * @param string $contenttype
     * @return File
     */
    public function setContenttype(string $contenttype): File
    {
        $this->contenttype = $contenttype;
        return $this;
    }

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     * @return File
     */
    public function setHash(string $hash): File
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * @return bool
     */
    public function isThumb(): bool
    {
        return $this->thumb;
    }

    /**
     * @param bool $thumb
     * @return File
     */
    public function setThumb(bool $thumb): File
    {
        $this->thumb = $thumb;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * @param int $category
     * @return File
     */
    public function setCategory(int $category): File
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return File
     */
    public function setSize(int $size): File
    {
        $this->size = $size;
        return $this;
    }
}
