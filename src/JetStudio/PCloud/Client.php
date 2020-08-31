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

namespace Jetcoder\PCloud;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

class Client
{
    public const API_BASE_URL = 'https://api.pcloud.com/';
    public const SUCCESS_CODE = [200, 201, 202];
    /**
     * @var string
     */
    protected string $url;
    /**
     * @var HttpClient
     */
    protected HttpClient $httpClient;

    /**
     * @var string|null
     */
    protected ?string $token = null;

    /**
     * Client constructor.
     * @param string|null $token
     */
    public function __construct(?string $token = null)
    {
        $this->token = $token;
        $this->httpClient = new HttpClient(
            [
                'base_uri' => self::API_BASE_URL
            ]
        );
    }

    /**
     * @param string $uri
     * @param array $params
     * @return string
     * @throws RequestException
     */
    public function get(string $uri, array $params = []): string
    {
        $uri .= $this->buildQueryParams($params);
        $request = new Request('GET', $uri);
        $response = $this->httpClient->send($request);
        return $this->handleResponse($response);
    }

    /**
     * @param array $params
     * @return string
     */
    protected function buildQueryParams(array $params = []): string
    {
        $params = array_merge($params, ['timeformat' => 'timestamp']);
        if ($this->token) {
            $params = array_merge($params, ['auth' => $this->token]);
        }
        $urlParams = '?' . http_build_query($params);
        return $urlParams;
    }

    /**
     * @param ResponseInterface $response
     * @return string
     */
    protected function handleResponse(ResponseInterface $response): string
    {
        if (in_array($response->getStatusCode(), self::SUCCESS_CODE)) {
            return $response->getBody()->getContents();
        }
        return '';
    }

    /**
     * @param string $uri
     * @param array $formData
     * @param array $params
     * @return string
     */
    public function post(string $uri, array $formData, array $params = []): string
    {
        $uri .= $this->buildQueryParams($params);
        $request = new Request('POST', $uri);
        $response = $this->httpClient->send($request, ['form_params' => $formData]);
        return $this->handleResponse($response);
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string|null $token
     * @return Client
     */
    public function setToken(?string $token): Client
    {
        $this->token = $token;
        return $this;
    }
}
