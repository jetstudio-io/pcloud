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

namespace Jetcoder\PCloud\Entity;

use JMS\Serializer\Annotation as Serializer;

class UploadLink
{
    // 50G in byte
    public const DEFAULT_MAX_SPACE = 50 * 1024 * 1024 * 1024 * 1024;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $folderid = 0;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected $path = '';

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected $comment = '';

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $expire = 0;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $maxspace = self::DEFAULT_MAX_SPACE;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $maxfiles = 0;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $uploadlinkid = 0;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected $link = '';

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected $mail = '';

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected $code = '';

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $space = 0;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $files = 0;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $created = 0;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $modified = 0;

    /**
     * @Serializer\Type("Jetcoder\PCloud\Entity\Folder")
     * @var Folder|null
     */
    protected $metadata = null;

    /**
     * @return int
     */
    public function getFolderid(): int
    {
        return $this->folderid;
    }

    /**
     * @param int $folderid
     * @return UploadLink
     */
    public function setFolderid(int $folderid): UploadLink
    {
        $this->folderid = $folderid;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return UploadLink
     */
    public function setPath(string $path): UploadLink
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return UploadLink
     */
    public function setComment(string $comment): UploadLink
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpire(): int
    {
        return $this->expire;
    }

    /**
     * @param int $expire
     * @return UploadLink
     */
    public function setExpire(int $expire): UploadLink
    {
        $this->expire = $expire;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxspace(): int
    {
        return $this->maxspace;
    }

    /**
     * @param int $maxspace
     * @return UploadLink
     */
    public function setMaxspace(int $maxspace): UploadLink
    {
        $this->maxspace = $maxspace;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxfiles(): int
    {
        return $this->maxfiles;
    }

    /**
     * @param int $maxfiles
     * @return UploadLink
     */
    public function setMaxfiles(int $maxfiles): UploadLink
    {
        $this->maxfiles = $maxfiles;
        return $this;
    }

    /**
     * @return int
     */
    public function getUploadlinkid(): int
    {
        return $this->uploadlinkid;
    }

    /**
     * @param int $uploadlinkid
     * @return UploadLink
     */
    public function setUploadlinkid(int $uploadlinkid): UploadLink
    {
        $this->uploadlinkid = $uploadlinkid;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return UploadLink
     */
    public function setLink(string $link): UploadLink
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     * @return UploadLink
     */
    public function setMail(string $mail): UploadLink
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return UploadLink
     */
    public function setCode(string $code): UploadLink
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpace(): int
    {
        return $this->space;
    }

    /**
     * @param int $space
     * @return UploadLink
     */
    public function setSpace(int $space): UploadLink
    {
        $this->space = $space;
        return $this;
    }

    /**
     * @return int
     */
    public function getFiles(): int
    {
        return $this->files;
    }

    /**
     * @param int $files
     * @return UploadLink
     */
    public function setFiles(int $files): UploadLink
    {
        $this->files = $files;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreated(): int
    {
        return $this->created;
    }

    /**
     * @param int $created
     * @return UploadLink
     */
    public function setCreated(int $created): UploadLink
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return int
     */
    public function getModified(): int
    {
        return $this->modified;
    }

    /**
     * @param int $modified
     * @return UploadLink
     */
    public function setModified(int $modified): UploadLink
    {
        $this->modified = $modified;
        return $this;
    }

    /**
     * @return Folder|null
     */
    public function getMetadata(): ?Folder
    {
        return $this->metadata;
    }

    /**
     * @param Folder|null $metadata
     * @return UploadLink
     */
    public function setMetadata(?Folder $metadata): UploadLink
    {
        $this->metadata = $metadata;
        return $this;
    }
}
