<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to get a sticker set. On success, a <a
 * href="https://core.telegram.org/bots/api#stickerset">StickerSet</a> object is
 * returned.
 */
final class GetStickerSet extends Data implements TelegramBotData
{
    public function __construct(
        /** Name of the sticker set */
        public string $name,
    ) {
    }
}
