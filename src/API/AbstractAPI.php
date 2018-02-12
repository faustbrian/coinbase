<?php

declare(strict_types=1);

/*
 * This file is part of Coinbase PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Coinbase\API;

use BrianFaust\Http\Http;
use BrianFaust\Http\PendingHttpRequest;

abstract class AbstractAPI
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $secret;

    /**
     * @var string
     */
    private $version;

    /**
     * Create a new API class instance.
     *
     * @param string $key
     * @param string $secret
     * @param string $version
     */
    public function __construct(string $key, string $secret, string $version)
    {
        $this->key = $key;
        $this->secret = $secret;
        $this->version = $version;
    }

    /**
     * Create and send an Http "GET" request.
     */
    protected function get(string $path, array $params = []): array
    {
        return $this->getHttpClient('GET', $path, $params)->get($path, $params)->json();
    }

    /**
     * Create and send an Http "POST" request.
     */
    protected function post(string $path, array $params = []): array
    {
        return $this->getHttpClient('POST', $path, $params)->post($path, $params)->json();
    }

    /**
     * Create and send an Http "PUT" request.
     */
    protected function put(string $path, array $params = []): array
    {
        return $this->getHttpClient('PUT', $path, $params)->put($path, $params)->json();
    }

    /**
     * Create and send an Http "DELETE" request.
     */
    protected function delete(string $path, array $params = []): array
    {
        return $this->getHttpClient('DELETE', $path, $params)->delete($path, $params)->json();
    }

    /**
     * Create a new HTTP Client instance.
     *
     * @param string $method
     * @param string $path
     * @param array  $params
     *
     * @return PendingHttpRequest
     */
    private function getHttpClient(string $method, string $path, array $params = []): PendingHttpRequest
    {
        return Http::withBaseUri('https://api.coinbase.com/v2/')->withHeaders([
            'CB-ACCESS-KEY'       => $this->key,
            'CB-ACCESS-TIMESTAMP' => $timestamp = time(),
            'CB-ACCESS-SIGN'      => $this->signature($timestamp, $method, $path, $params),
            'CB-VERSION'          => $this->version,
        ]);
    }

    /**
     * Generate the base64-encoded signature.
     *
     * @param int    $timestamp
     * @param string $method
     * @param string $path
     * @param array  $params
     *
     * @return string
     */
    private function signature(int $timestamp, string $method, string $path, array $params): string
    {
        $value = $timestamp.$method.'/'.$path;

        if ($params) {
            $value .= json_encode($params);
        }

        return base64_encode(hash_hmac('sha256', $value, base64_decode($this->secret, true), true));
    }
}
