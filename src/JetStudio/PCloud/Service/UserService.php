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

use Jetcoder\PCloud\Entity\UserInfo;

class UserService extends BaseService
{
    public const USERINFO_URI = 'userinfo';

    public const LIST_TOKEN_URI = 'listtokens';
    public const DELETE_TOKEN_URI = 'deletetoken';

    /**
     * @param string $username
     * @param string $password
     * @param bool $clean
     * @return UserInfo
     */
    public function login(string $username, string $password, bool $clean = true): UserInfo
    {
        $this->serviceUri = self::USERINFO_URI;
        /** @var string $res */
        $res = $this->post(['username' => $username, 'password' => $password], ['getauth' => 1]);
        /** @var UserInfo $userInfo */
        $userInfo = $this->serializer->deserialize($res, UserInfo::class, 'json');
        // Update client token for other request
        $this->client->setToken($userInfo->getAuth());
        if ($clean) {
            $this->cleanToken();
        }
        return $userInfo;
    }

    protected function cleanToken(): void
    {
        $this->serviceUri = self::LIST_TOKEN_URI;
        /** @var array $res */
        $res = $this->get([], true);
        if ($res && $res['result'] == 0) {
            foreach ($res['tokens'] as $token) {
                $this->serviceUri = self::DELETE_TOKEN_URI;
                if (!$token['current']) {
                    $res = $this->get(['tokenid' => $token['tokenid']]);
                }
            }
        }
    }
}
