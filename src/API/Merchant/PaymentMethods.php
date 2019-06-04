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

class PaymentMethods extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#list-payment-methods
     *
     * @return array
     */
    public function all(): array
    {
        return $this->get('payment-methods');
    }

    /**
     * @see https://developers.coinbase.com/api/v2#show-a-payment-method
     *
     * @param int $paymentMethod
     *
     * @return array
     */
    public function details(int $paymentMethod): array
    {
        return $this->get("payment-methods/{$paymentMethod}");
    }
}
