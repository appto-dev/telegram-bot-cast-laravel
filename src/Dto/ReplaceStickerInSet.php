<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\InputSticker;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to replace an existing sticker in a sticker set with a new one. The method is equivalent to calling <a
 * href="https://core.telegram.org/bots/api#deletestickerfromset">deleteStickerFromSet</a>, then <a
 * href="https://core.telegram.org/bots/api#addstickertoset">addStickerToSet</a>, then <a
 * href="https://core.telegram.org/bots/api#setstickerpositioninset">setStickerPositionInSet</a>. Returns <em>True</em> on
 * success.
 */
final class ReplaceStickerInSet extends Dto implements TelegramBotDto
{
    public function __construct(
        /** User identifier of the sticker set owner */
        public int $user_id,
        /** Sticker set name */
        public string $name,
        /** File identifier of the replaced sticker */
        public string $old_sticker,
        /**
         * A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to
         * the set, then the set remains unchanged.
         */
        public InputSticker $sticker,
    ) {
    }
}
