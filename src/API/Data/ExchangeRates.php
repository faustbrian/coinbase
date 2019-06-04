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

namespace Plients\Coinbase\API\Data;

use Plients\Coinbase\API\AbstractAPI;

class ExchangeRates extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#get-exchange-rates
     *
     * @return array
     */
    public function all(): array
    {
        return $this->get('exchange-rates');
    }
}
