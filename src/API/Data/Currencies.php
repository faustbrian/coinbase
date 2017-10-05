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

class Currencies extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#get-currencies
     *
     * @return array
     */
    public function all(): array
    {
        return $this->get('currencies');
    }
}
