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

abstract class Metadata
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected string $id = '';

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected string $icon = 'folder';

    /**
     * the folderid of the folder the object resides in
     *
     * @Serializer\Type("int")
     * @var int
     */
    protected int $parentfolderid = 0;

    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected bool $isfolder = true;

    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected bool $ismine = true;

    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected bool $isshared = false;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected string $name = '';

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected int $created = 0;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected int $modified = 0;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected string $path = '';

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return $this
     */
    public function setIcon(string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentfolderid(): int
    {
        return $this->parentfolderid;
    }

    /**
     * @param int $parentfolderid
     * @return $this
     */
    public function setParentfolderid(int $parentfolderid): self
    {
        $this->parentfolderid = $parentfolderid;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsfolder(): bool
    {
        return $this->isfolder;
    }

    /**
     * @param bool $isfolder
     * @return $this
     */
    public function setIsfolder(bool $isfolder): self
    {
        $this->isfolder = $isfolder;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsmine(): bool
    {
        return $this->ismine;
    }

    /**
     * @param bool $ismine
     * @return $this
     */
    public function setIsmine(bool $ismine): self
    {
        $this->ismine = $ismine;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsshared(): bool
    {
        return $this->isshared;
    }

    /**
     * @param bool $isshared
     * @return $this
     */
    public function setIsshared(bool $isshared): self
    {
        $this->isshared = $isshared;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;
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
     * @return $this
     */
    public function setCreated(int $created): self
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
     * @return $this
     */
    public function setModified(int $modified): self
    {
        $this->modified = $modified;
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
     * @return $this
     */
    public function setPath(string $path): self
    {
        $this->path = $path;
        return $this;
    }
}
