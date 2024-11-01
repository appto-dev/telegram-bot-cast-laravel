<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents information about an order.
 *
 * @version Telegram Bot API 7.11
 */
final class OrderInfo extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * User name
         * @var string
         */
        public ?string $name,
        /**
         * User's phone number
         * @var string
         */
        public ?string $phone_number,
        /**
         * User email
         * @var string
         */
        public ?string $email,
        /**
         * User shipping address
         * @var ShippingAddress
         */
        public ?ShippingAddress $shipping_address,
    ) {
    }
}
