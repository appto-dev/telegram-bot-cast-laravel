<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\InputSticker;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus
 * created. Returns <em>True</em> on success.
 */
final class CreateNewStickerSet extends Dto implements TelegramBotDto
{
    public function __construct(
        /** User identifier of created sticker set owner */
        public int $user_id,
        /**
         * Short name of sticker set, to be used in <code>t.me/addstickers/</code> URLs (e.g., <em>animals</em>). Can
         * contain only English letters, digits and underscores. Must begin with a letter, can't contain consecutive
         * underscores and must end in <code>"_by_<bot_username>"</code>. <code><bot_username></code> is case
         * insensitive. 1-64 characters.
         */
        public string $name,
        /** Sticker set title, 1-64 characters */
        public string $title,
        /** A JSON-serialized list of 1-50 initial stickers to be added to the sticker set */
        public InputSticker $stickers,
        /**
         * Type of stickers in the set, pass "regular", "mask", or "custom_emoji". By default, a regular sticker set is
         * created.
         */
        public ?string $sticker_type,
        /**
         * Pass <em>True</em> if stickers in the sticker set must be repainted to the color of text when used in
         * messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based
         * on context; for custom emoji sticker sets only
         */
        public ?bool $needs_repainting,
    ) {
    }
}
