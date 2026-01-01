<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes the background of a gift.
 */
final class GiftBackground extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Center color of the background in RGB format
         * @var int
         */
        public int $center_color,
        /**
         * Edge color of the background in RGB format
         * @var int
         */
        public int $edge_color,
        /**
         * Text color of the background in RGB format
         * @var int
         */
        public int $text_color,
    ) {
    }
}
