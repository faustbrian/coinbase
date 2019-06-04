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

namespace Plients\Coinbase\API\Merchant;

use Plients\Coinbase\API\AbstractAPI;

class Checkouts extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#list-checkouts
     *
     * @return array
     */
    public function all(): array
    {
        return $this->get('checkouts');
    }

    /**
     * @see https://developers.coinbase.com/api/v2#show-a-checkout
     *
     * @param int $checkout
     *
     * @return array
     */
    public function details(int $checkout): array
    {
        return $this->get("checkouts/{$checkout}");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#create-checkout
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params): array
    {
        return $this->post('checkouts', $params);
    }

    /**
     * @see https://developers.coinbase.com/api/v2#list-checkout39s-orders
     *
     * @param int $checkout
     *
     * @return array
     */
    public function orders(int $checkout): array
    {
        return $this->get("checkouts/{$checkout}/orders");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#create-a-new-order-for-a-checkout
     *
     * @param int   $checkout
     * @param array $params
     *
     * @return array
     */
    public function createOrder(int $checkout, array $params): array
    {
        return $this->post("checkouts/{$checkout}/orders", $params);
    }
}
