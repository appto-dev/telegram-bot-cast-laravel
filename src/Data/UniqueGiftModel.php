<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object describes the model of a unique gift.
 */
final class UniqueGiftModel extends Data implements TelegramBotData
{
    public function __construct(
        /** Name of the model */
        public string $name,
        /** The sticker that represents the unique gift */
        public Sticker $sticker,
        /** The number of unique gifts that receive this model for every 1000 gift upgrades. Always 0 for crafted gifts. */
        public int $rarity_per_mille,
        /** Rarity of the model if it is a crafted model. Currently, can be "uncommon", "rare", "epic", or "legendary". */
        public ?string $rarity,
    ) {
    }
}
