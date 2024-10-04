<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * OrderInfo
 *
 * This object represents information about an order.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class OrderInfo extends Dto implements TypeInterface
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
