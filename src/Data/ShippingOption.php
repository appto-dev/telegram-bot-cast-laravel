<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents one shipping option.
 */
final class ShippingOption extends Data implements TelegramBotData
{
    public function __construct(
        /** Shipping option identifier */
        public string $id,
        /** Option title */
        public string $title,
        /** List of price portions */
        public LabeledPrice $prices,
    ) {
    }
}
