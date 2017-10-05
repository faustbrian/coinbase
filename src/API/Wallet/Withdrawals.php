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

class Withdrawals extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#list-withdrawals
     *
     * @param int $account
     *
     * @return array
     */
    public function all(int $account): array
    {
        return $this->get("accounts/{$account}/withdrawals");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#show-a-withdrawal
     *
     * @param int $account
     * @param int $withdrawal
     *
     * @return array
     */
    public function details(int $account, int $withdrawal): array
    {
        return $this->get("accounts/{$account}/withdrawals/{$withdrawal}");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#withdraw-funds
     *
     * @param int   $account
     * @param array $params
     *
     * @return array
     */
    public function create(int $account, array $params): array
    {
        return $this->post("accounts/{$account}/withdrawals", $params);
    }

    /**
     * @see https://developers.coinbase.com/api/v2#commit-a-withdrawal
     *
     * @param int $account
     * @param int $withdrawal
     *
     * @return array
     */
    public function commit(int $account, int $withdrawal): array
    {
        return $this->post("accounts/{$account}/withdrawals/{$withdrawal}/commit");
    }
}
