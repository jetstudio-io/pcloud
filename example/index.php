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

require_once __DIR__ . '/../vendor/autoload.php';

use Jetcoder\PCloud\Client;
use Jetcoder\PCloud\Service\UserService;

$config = require_once 'config.php';

//$client = new Client();
//$userService = new UserService($client);
//$userInfo = $userService->login($config['username'], $config['password']);
//echo "Login successful\n";
//echo "User id: {$userInfo->getUserid()}\n";
//echo "Auth: {$userInfo->getAuth()}";

// auth: COwRHkZegh07ZIdSbc7tle9BfErO7Jy8TzB9qaVM7

$client = new Client('COwRHkZegh07ZIdSbc7tle9BfErO7Jy8TzB9qaVM7');
$folderService = new \Jetcoder\PCloud\Service\FolderService($client);
$folder = $folderService->listOfFolder(5500126870);
echo "Folder id: {$folder->getFolderid()}\n";
