<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a sticker set.
 *
 * @version Telegram Bot API 7.10
 */
final class StickerSet extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Sticker set name
         * @var string
         */
        public string $name,
        /**
         * Sticker set title
         * @var string
         */
        public string $title,
        /**
         * Type of stickers in the set, currently one of "regular", "mask", "custom_emoji"
         * @var string
         */
        public string $sticker_type,
        /**
         * List of all set stickers
         * @var Sticker
         */
        public Sticker $stickers,
        /**
         * Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
         * @var PhotoSize|null
         */
        public ?PhotoSize $thumbnail,
    ) {
    }
}
