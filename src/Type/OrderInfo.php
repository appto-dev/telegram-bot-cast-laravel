<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class OrderInfo extends Data implements TelegramType
{
    public function __construct(
        /** @var  string|null  User name */
        public ?string $name,
        /** @var  string|null  User's phone number */
        public ?string $phone_number,
        /** @var  string|null  User email */
        public ?string $email,
        /** @var  ShippingAddress|null  User shipping address */
        public ?ShippingAddress $shipping_address,
    ) {
    }
}
