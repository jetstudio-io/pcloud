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

use Jetcoder\PCloud\Client;
use JMS\Serializer\SerializerInterface;

abstract class BaseService
{
    /**
     * The service uri which must be override in child class
     * @var string
     */
    protected $serviceUri = '';

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * BaseService constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->serializer = SerializerFactory::build();
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param Client $client
     * @return BaseService
     */
    public function setClient(Client $client): BaseService
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @param array $params
     * @param bool $getArray
     * @return string|array
     */
    protected function get(array $params = [], bool $getArray = false)
    {
        $res = $this->client->get($this->serviceUri, $params);
        if ($getArray) {
            return $this->handleResponse($res);
        }
        return $res;
    }

    /**
     * @param array $formData
     * @param array $params
     * @param bool $getArray
     * @return string|array
     */
    protected function post(array $formData, array $params = [], bool $getArray = false)
    {
        $res = $this->client->post($this->serviceUri, $formData, $params);
        if ($getArray) {
            return $this->handleResponse($res);
        }
        return $res;
    }

    protected function handleResponse(string $res): array
    {
        if ($res) {
            $array = json_decode($res, true);
            if ($array && is_array($array)) {
                return $array;
            }
        }
        return [];
    }
}
