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

namespace BrianFaust\Coinbase;

class Client
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
     * Create a new client instance.
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
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $class = "BrianFaust\\Coinbase\\API\\{$name}";

        return new $class($this->key, $this->secret, $this->version);
    }
}
