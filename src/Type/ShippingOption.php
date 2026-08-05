<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class ShippingOption extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Shipping option identifier */
        public string $id,
        /** @var  string  Option title */
        public string $title,
        /** @var  LabeledPrice[]  List of price portions */
        public array $prices,
    ) {
    }
}
