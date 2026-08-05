<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class ShippingAddress extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Two-letter ISO 3166-1 alpha-2 country code */
        public string $country_code,
        /** @var  string  State, if applicable */
        public string $state,
        /** @var  string  City */
        public string $city,
        /** @var  string  First line for the address */
        public string $street_line1,
        /** @var  string  Second line for the address */
        public string $street_line2,
        /** @var  string  Address post code */
        public string $post_code,
    ) {
    }
}
