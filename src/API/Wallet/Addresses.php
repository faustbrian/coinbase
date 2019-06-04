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

class Addresses extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#list-addresses
     *
     * @param int $account
     *
     * @return array
     */
    public function all(int $account): array
    {
        return $this->get("accounts/{$account}/addresses");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#show-addresss
     *
     * @param int $account
     * @param int $address
     *
     * @return array
     */
    public function details(int $account, int $address): array
    {
        return $this->get("accounts/{$account}/addresses/{$address}");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#list-address39s-transactions
     *
     * @param int $account
     *
     * @return array
     */
    public function transactions(int $account): array
    {
        return $this->get("accounts/{$account}/addresses/{$address}/transactions");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#create-address
     *
     * @param int   $account
     * @param array $params
     *
     * @return array
     */
    public function create(int $account, array $params): array
    {
        return $this->post("accounts/{$account}/addresses", $params);
    }
}
