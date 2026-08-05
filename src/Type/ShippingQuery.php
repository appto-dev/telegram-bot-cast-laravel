<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class ShippingQuery extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Unique query identifier */
        public string $id,
        /** @var  User  User who sent the query */
        public User $from,
        /** @var  string  Bot-specified invoice payload */
        public string $invoice_payload,
        /** @var  ShippingAddress  User specified shipping address */
        public ShippingAddress $shipping_address,
    ) {
    }
}
