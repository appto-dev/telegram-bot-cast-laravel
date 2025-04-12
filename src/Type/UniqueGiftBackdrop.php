<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes the backdrop of a unique gift.
 */
final class UniqueGiftBackdrop extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Name of the backdrop
         * @var string
         */
        public string $name,
        /**
         * Colors of the backdrop
         * @var UniqueGiftBackdropColors
         */
        public UniqueGiftBackdropColors $colors,
        /**
         * The number of unique gifts that receive this backdrop for every 1000 gifts
         * upgraded
         * @var int
         */
        public int $rarity_per_mille,
    ) {
    }
}
