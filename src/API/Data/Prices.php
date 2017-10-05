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

namespace BrianFaust\Coinbase\API\Data;

use BrianFaust\Coinbase\API\AbstractAPI;

class Prices extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#get-buy-price
     *
     * @param string $currencyPair
     *
     * @return array
     */
    public function buy(string $currencyPair): array
    {
        return $this->get("prices/{$currencyPair}/buy");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#get-sell-price
     *
     * @param string $currencyPair
     *
     * @return array
     */
    public function sell(string $currencyPair): array
    {
        return $this->get("prices/{$currencyPair}/sell");
    }

    /**
     * @see https://developers.coinbase.com/api/v2#get-spot-price
     *
     * @param string $currencyPair
     *
     * @return array
     */
    public function spot(string $currencyPair): array
    {
        return $this->get("prices/{$currencyPair}/spot");
    }
}
