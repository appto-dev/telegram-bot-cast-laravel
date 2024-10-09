<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents information about an order.
 *
 * @version Telegram Bot API 7.10
 */
final class OrderInfo extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * User name
         * @var string|null
         */
        public ?string $name,
        /**
         * User's phone number
         * @var string|null
         */
        public ?string $phone_number,
        /**
         * User email
         * @var string|null
         */
        public ?string $email,
        /**
         * User shipping address
         * @var ShippingAddress|null
         */
        public ?ShippingAddress $shipping_address,
    ) {
    }
}
