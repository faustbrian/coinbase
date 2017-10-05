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

namespace BrianFaust\Coinbase\API\Wallet;

use BrianFaust\Coinbase\API\AbstractAPI;

class Sells extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#list-sells
     *
     * @param int $account
     *
     * @return array
     */
    public function all(int $account): array
    {
        return $this->get("accounts/{$account}/sells");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#show-a-sell
     *
     * @param int $account
     * @param int $sell
     *
     * @return array
     */
    public function details(int $account, int $sell): array
    {
        return $this->get("accounts/{$account}/sells/{$sell}");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#place-sell-order
     *
     * @param int   $account
     * @param array $params
     *
     * @return array
     */
    public function create(int $account, array $params): array
    {
        return $this->post("accounts/{$account}/sells", $params);
    }

    /**
     * @see https://developers.coinbase.com/api/v2#commit-a-sell
     *
     * @param int $account
     * @param int $sell
     *
     * @return array
     */
    public function commit(int $account, int $sell): array
    {
        return $this->post("accounts/{$account}/sells/{$sell}/commit");
    }
}
