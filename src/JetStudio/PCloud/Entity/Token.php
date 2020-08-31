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

class Token
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected string $device = '';

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected int $tokenid = 0;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected int $expiresInactive = 0;

    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected bool $current = true;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected int $expires = 0;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected int $created = 0;

    /**
     * @return string
     */
    public function getDevice(): string
    {
        return $this->device;
    }

    /**
     * @param string $device
     * @return Token
     */
    public function setDevice(string $device): Token
    {
        $this->device = $device;
        return $this;
    }

    /**
     * @return int
     */
    public function getTokenid(): int
    {
        return $this->tokenid;
    }

    /**
     * @param int $tokenid
     * @return Token
     */
    public function setTokenid(int $tokenid): Token
    {
        $this->tokenid = $tokenid;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpiresInactive(): int
    {
        return $this->expiresInactive;
    }

    /**
     * @param int $expiresInactive
     * @return Token
     */
    public function setExpiresInactive(int $expiresInactive): Token
    {
        $this->expiresInactive = $expiresInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCurrent(): bool
    {
        return $this->current;
    }

    /**
     * @param bool $current
     * @return Token
     */
    public function setCurrent(bool $current): Token
    {
        $this->current = $current;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpires(): int
    {
        return $this->expires;
    }

    /**
     * @param int $expires
     * @return Token
     */
    public function setExpires(int $expires): Token
    {
        $this->expires = $expires;
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
     * @return Token
     */
    public function setCreated(int $created): Token
    {
        $this->created = $created;
        return $this;
    }
}
