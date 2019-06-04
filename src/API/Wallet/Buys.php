<?php

declare(strict_types=1);

/*
 * This file is part of Coinbase PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Coinbase\API\Wallet;

use Plients\Coinbase\API\AbstractAPI;

class Buys extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#list-buys
     *
     * @param int $account
     *
     * @return array
     */
    public function all(int $account): array
    {
        return $this->get("accounts/{$account}/buys");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#show-a-buy
     *
     * @param int $account
     * @param int $buy
     *
     * @return array
     */
    public function details(int $account, int $buy): array
    {
        return $this->get("accounts/{$account}/buys/{$buy}");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#place-buy-order
     *
     * @param int   $account
     * @param array $params
     *
     * @return array
     */
    public function create(int $account, array $params): array
    {
        return $this->post("accounts/{$account}/buys", $params);
    }

    /**
     * @see https://developers.coinbase.com/api/v2#commit-a-buy
     *
     * @param int $account
     * @param int $buy
     *
     * @return array
     */
    public function commit(int $account, int $buy): array
    {
        return $this->post("accounts/{$account}/buys/{$buy}/commit");
    }
}
