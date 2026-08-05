<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle stickers and sticker sets.
 */
class StickerSet extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Sticker set name */
        public string $name,
        /** @var  string  Sticker set title */
        public string $title,
        /** @var  string  Type of stickers in the set, currently one of "regular", "mask", "custom_emoji" */
        public string $sticker_type,
        /** @var  Sticker[]  List of all set stickers */
        public array $stickers,
        /** @var  PhotoSize|null  Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format */
        public ?PhotoSize $thumbnail,
    ) {
    }
}
