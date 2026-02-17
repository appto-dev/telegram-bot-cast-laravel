<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\InputSticker;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to add a new sticker to a set created by the bot. Emoji sticker sets can have up to 200
 * stickers. Other sticker sets can have up to 120 stickers. Returns <em>True</em> on success.
 */
final class AddStickerToSet extends Dto implements TelegramBotDto
{
    public function __construct(
        /** User identifier of sticker set owner */
        public int $user_id,
        /** Sticker set name */
        public string $name,
        /**
         * A JSON-serialized object with information about the added sticker. If exactly the same sticker had already
         * been added to the set, then the set isn't changed.
         */
        public InputSticker $sticker,
    ) {
    }
}
