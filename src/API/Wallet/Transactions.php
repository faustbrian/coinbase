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

class Transactions extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#list-transactions
     *
     * @param int $account
     *
     * @return array
     */
    public function all(int $account): array
    {
        return $this->get("accounts/{$account}/transactions");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#show-a-transaction
     *
     * @param int $account
     * @param int $transaction
     *
     * @return array
     */
    public function details(int $account, int $transaction): array
    {
        return $this->get("accounts/{$account}/transactions/{$transaction}");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#send-money
     *
     * @param int   $account
     * @param array $params
     *
     * @return array
     */
    public function sendMoney(int $account, array $params): array
    {
        return $this->post("accounts/{$account}/transactions", ['type' => 'send'] + $params);
    }

    /**
     * @see https://developers.coinbase.com/api/v2#transfer-money-between-accounts
     *
     * @param int   $account
     * @param array $params
     *
     * @return array
     */
    public function transferMoney(int $account, array $params): array
    {
        return $this->post("accounts/{$account}/transactions", ['type' => 'transfer'] + $params);
    }

    /**
     * @see https://developers.coinbase.com/api/v2#request-money
     *
     * @param int   $account
     * @param array $params
     *
     * @return array
     */
    public function requestMoney(int $account, array $params): array
    {
        return $this->post("accounts/{$account}/transactions", ['type' => 'request'] + $params);
    }

    /**
     * @see https://developers.coinbase.com/api/v2#complete-request-money
     *
     * @param int $account
     * @param int $transaction
     *
     * @return array
     */
    public function complete(int $account, int $transaction): array
    {
        return $this->post("accounts/{$account}/transactions/{$transaction}/complete");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#re-send-request-money
     *
     * @param int $account
     * @param int $transaction
     *
     * @return array
     */
    public function resend(int $account, int $transaction): array
    {
        return $this->post("accounts/{$account}/transactions/{$transaction}/resend");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#cancel-request-money
     *
     * @param int $account
     * @param int $transaction
     *
     * @return array
     */
    public function cancel(int $account, int $transaction): array
    {
        return $this->delete("accounts/{$account}/transactions/{$transaction}");
    }
}
