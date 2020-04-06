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

class UserInfo
{
    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected $cryptosetup = false;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $plan = 0;

    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected $cryptosubscription = false;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $publiclinkquota = 0;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected $email = '';

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $result = 0;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected $auth = '';

    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected $emailverified = true;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $trashrevretentiondays = 15;

    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected $usedpublinkbranding = false;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $userid = 0;

    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected $agreedwithpp = true;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $quota = 0;

    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected $haspassword = true;

    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected $premium = false;

    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected $premiumlifetime = false;

    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected $cryptolifetime = false;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $usedquota = 0;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected $language = 'en';

    /**
     * @Serializer\Type("boolean")
     * @var bool
     */
    protected $business = false;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $freequota = 0;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    protected $registered = 0;

    /**
     * @Serializer\Type("array")
     * @var array
     */
    protected $journey = [];

    /**
     * @return bool
     */
    public function isCryptosetup(): bool
    {
        return $this->cryptosetup;
    }

    /**
     * @param bool $cryptosetup
     * @return UserInfo
     */
    public function setCryptosetup(bool $cryptosetup): UserInfo
    {
        $this->cryptosetup = $cryptosetup;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlan(): int
    {
        return $this->plan;
    }

    /**
     * @param int $plan
     * @return UserInfo
     */
    public function setPlan(int $plan): UserInfo
    {
        $this->plan = $plan;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCryptosubscription(): bool
    {
        return $this->cryptosubscription;
    }

    /**
     * @param bool $cryptosubscription
     * @return UserInfo
     */
    public function setCryptosubscription(bool $cryptosubscription): UserInfo
    {
        $this->cryptosubscription = $cryptosubscription;
        return $this;
    }

    /**
     * @return int
     */
    public function getPubliclinkquota(): int
    {
        return $this->publiclinkquota;
    }

    /**
     * @param int $publiclinkquota
     * @return UserInfo
     */
    public function setPubliclinkquota(int $publiclinkquota): UserInfo
    {
        $this->publiclinkquota = $publiclinkquota;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return UserInfo
     */
    public function setEmail(string $email): UserInfo
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int
     */
    public function getResult(): int
    {
        return $this->result;
    }

    /**
     * @param int $result
     * @return UserInfo
     */
    public function setResult(int $result): UserInfo
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuth(): string
    {
        return $this->auth;
    }

    /**
     * @param string $auth
     * @return UserInfo
     */
    public function setAuth(string $auth): UserInfo
    {
        $this->auth = $auth;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEmailverified(): bool
    {
        return $this->emailverified;
    }

    /**
     * @param bool $emailverified
     * @return UserInfo
     */
    public function setEmailverified(bool $emailverified): UserInfo
    {
        $this->emailverified = $emailverified;
        return $this;
    }

    /**
     * @return int
     */
    public function getTrashrevretentiondays(): int
    {
        return $this->trashrevretentiondays;
    }

    /**
     * @param int $trashrevretentiondays
     * @return UserInfo
     */
    public function setTrashrevretentiondays(int $trashrevretentiondays): UserInfo
    {
        $this->trashrevretentiondays = $trashrevretentiondays;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUsedpublinkbranding(): bool
    {
        return $this->usedpublinkbranding;
    }

    /**
     * @param bool $usedpublinkbranding
     * @return UserInfo
     */
    public function setUsedpublinkbranding(bool $usedpublinkbranding): UserInfo
    {
        $this->usedpublinkbranding = $usedpublinkbranding;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserid(): int
    {
        return $this->userid;
    }

    /**
     * @param int $userid
     * @return UserInfo
     */
    public function setUserid(int $userid): UserInfo
    {
        $this->userid = $userid;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAgreedwithpp(): bool
    {
        return $this->agreedwithpp;
    }

    /**
     * @param bool $agreedwithpp
     * @return UserInfo
     */
    public function setAgreedwithpp(bool $agreedwithpp): UserInfo
    {
        $this->agreedwithpp = $agreedwithpp;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuota(): int
    {
        return $this->quota;
    }

    /**
     * @param int $quota
     * @return UserInfo
     */
    public function setQuota(int $quota): UserInfo
    {
        $this->quota = $quota;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHaspassword(): bool
    {
        return $this->haspassword;
    }

    /**
     * @param bool $haspassword
     * @return UserInfo
     */
    public function setHaspassword(bool $haspassword): UserInfo
    {
        $this->haspassword = $haspassword;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPremium(): bool
    {
        return $this->premium;
    }

    /**
     * @param bool $premium
     * @return UserInfo
     */
    public function setPremium(bool $premium): UserInfo
    {
        $this->premium = $premium;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPremiumlifetime(): bool
    {
        return $this->premiumlifetime;
    }

    /**
     * @param bool $premiumlifetime
     * @return UserInfo
     */
    public function setPremiumlifetime(bool $premiumlifetime): UserInfo
    {
        $this->premiumlifetime = $premiumlifetime;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCryptolifetime(): bool
    {
        return $this->cryptolifetime;
    }

    /**
     * @param bool $cryptolifetime
     * @return UserInfo
     */
    public function setCryptolifetime(bool $cryptolifetime): UserInfo
    {
        $this->cryptolifetime = $cryptolifetime;
        return $this;
    }

    /**
     * @return int
     */
    public function getUsedquota(): int
    {
        return $this->usedquota;
    }

    /**
     * @param int $usedquota
     * @return UserInfo
     */
    public function setUsedquota(int $usedquota): UserInfo
    {
        $this->usedquota = $usedquota;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return UserInfo
     */
    public function setLanguage(string $language): UserInfo
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBusiness(): bool
    {
        return $this->business;
    }

    /**
     * @param bool $business
     * @return UserInfo
     */
    public function setBusiness(bool $business): UserInfo
    {
        $this->business = $business;
        return $this;
    }

    /**
     * @return int
     */
    public function getFreequota(): int
    {
        return $this->freequota;
    }

    /**
     * @param int $freequota
     * @return UserInfo
     */
    public function setFreequota(int $freequota): UserInfo
    {
        $this->freequota = $freequota;
        return $this;
    }

    /**
     * @return int
     */
    public function getRegistered(): int
    {
        return $this->registered;
    }

    /**
     * @param int $registered
     * @return UserInfo
     */
    public function setRegistered(int $registered): UserInfo
    {
        $this->registered = $registered;
        return $this;
    }

    /**
     * @return array
     */
    public function getJourney(): array
    {
        return $this->journey;
    }

    /**
     * @param array $journey
     * @return UserInfo
     */
    public function setJourney(array $journey): UserInfo
    {
        $this->journey = $journey;
        return $this;
    }
}
