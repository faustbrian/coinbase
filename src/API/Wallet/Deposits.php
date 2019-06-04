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

class Deposits extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#list-deposits
     *
     * @param int $account
     *
     * @return array
     */
    public function all(int $account): array
    {
        return $this->get("accounts/{$account}/deposits");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#show-a-deposit
     *
     * @param int $account
     * @param int $deposit
     *
     * @return array
     */
    public function details(int $account, int $deposit): array
    {
        return $this->get("accounts/{$account}/deposits/{$deposit}");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#place-deposit-order
     *
     * @param int   $account
     * @param array $params
     *
     * @return array
     */
    public function create(int $account, array $params): array
    {
        return $this->post("accounts/{$account}/deposits", $params);
    }

    /**
     * @see https://developers.coinbase.com/api/v2#commit-a-deposit
     *
     * @param int $account
     * @param int $deposit
     *
     * @return array
     */
    public function commit(int $account, int $deposit): array
    {
        return $this->post("accounts/{$account}/deposits/{$deposit}/commit");
    }
}
