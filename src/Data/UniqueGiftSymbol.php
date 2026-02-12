<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object describes the symbol shown on the pattern of a unique gift.
 */
final class UniqueGiftSymbol extends Data implements TelegramBotData
{
    public function __construct(
        /** Name of the symbol */
        public string $name,
        /** The sticker that represents the unique gift */
        public Sticker $sticker,
        /** The number of unique gifts that receive this model for every 1000 gifts upgraded */
        public int $rarity_per_mille,
    ) {
    }
}
