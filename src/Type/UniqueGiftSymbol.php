<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class UniqueGiftSymbol extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Name of the symbol */
        public string $name,
        /** @var  Sticker  The sticker that represents the unique gift */
        public Sticker $sticker,
        /** @var  int  The number of unique gifts that receive this model for every 1000 gifts upgraded */
        public int $rarity_per_mille,
    ) {
    }
}
