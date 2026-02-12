<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents information about an order.
 */
final class OrderInfo extends Data implements TelegramBotData
{
    public function __construct(
        /** User name */
        public ?string $name,
        /** User's phone number */
        public ?string $phone_number,
        /** User email */
        public ?string $email,
        /** User shipping address */
        public ?ShippingAddress $shipping_address,
    ) {
    }
}
