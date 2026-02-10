<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes the model of a unique gift.
 */
final class UniqueGiftModel extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Name of the model
         * @var string
         */
        public string $name,
        /**
         * The sticker that represents the unique gift
         * @var Sticker
         */
        public Sticker $sticker,
        /**
         * The number of unique gifts that receive this model for every 1000 gift upgrades.
         * Always 0 for crafted gifts.
         * @var int
         */
        public int $rarity_per_mille,
        /**
         * Rarity of the model if it is a crafted model. Currently, can be "uncommon",
         * "rare", "epic", or "legendary".
         * @var string
         */
        public ?string $rarity,
    ) {
    }
}
