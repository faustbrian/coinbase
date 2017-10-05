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

class Accounts extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#list-accounts
     *
     * @return array
     */
    public function all(): array
    {
        return $this->get('accounts');
    }

    /**
     * @see https://developers.coinbase.com/api/v2#show-an-account
     *
     * @param int $account
     *
     * @return array
     */
    public function details(int $account): array
    {
        return $this->get("accounts/{$account}");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#create-account
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params): array
    {
        return $this->post('accounts', $params);
    }

    /**
     * @see https://developers.coinbase.com/api/v2#set-account-as-primary
     *
     * @param int $account
     *
     * @return array
     */
    public function primary(int $account): array
    {
        return $this->post("accounts/{$account}/primary");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#update-account
     *
     * @param int   $account
     * @param array $params
     *
     * @return array
     */
    public function update(int $account, array $params): array
    {
        return $this->put("accounts/{$account}", $params);
    }

    /**
     * @see https://developers.coinbase.com/api/v2#delete-account
     *
     * @param int $account
     *
     * @return array
     */
    public function destroy(int $account): array
    {
        return $this->delete("accounts/{$account}");
    }
}
