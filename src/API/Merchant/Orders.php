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

namespace BrianFaust\Coinbase\API\Merchant;

use BrianFaust\Coinbase\API\AbstractAPI;

class Orders extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#list-orders
     *
     * @return array
     */
    public function all(): array
    {
        return $this->get('orders');
    }

    /**
     * @see https://developers.coinbase.com/api/v2#show-an-order
     *
     * @param int $order
     *
     * @return array
     */
    public function details(int $order): array
    {
        return $this->get("orders/{$order}");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#create-an-order
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params): array
    {
        return $this->post('orders', $params);
    }

    /**
     * @see https://developers.coinbase.com/api/v2#refund-an-order
     *
     * @param int $order
     *
     * @return array
     */
    public function refund(int $order): array
    {
        return $this->post("orders/{$order}/refund");
    }
}
