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

class Users extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#show-a-user
     *
     * @param int $user
     *
     * @return array
     */
    public function details(int $user): array
    {
        return $this->get("users/{$user}");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#show-current-user
     *
     * @return array
     */
    public function current(): array
    {
        return $this->get('user');
    }

    /**
     * @see https://developers.coinbase.com/api/v2#show-authorization-information
     *
     * @return array
     */
    public function authorization(): array
    {
        return $this->get('user/auth');
    }

    /**
     * @see https://developers.coinbase.com/api/v2#update-current-user
     *
     * @param array $params
     *
     * @return array
     */
    public function update(array $params): array
    {
        return $this->put('user', $params);
    }
}
