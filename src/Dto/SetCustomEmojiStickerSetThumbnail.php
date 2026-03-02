<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to set the thumbnail of a custom emoji sticker set. Returns <em>True</em> on success.
 */
final class SetCustomEmojiStickerSetThumbnail extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Sticker set name */
        public string $name,
        /**
         * Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the thumbnail and use
         * the first sticker as the thumbnail.
         */
        public ?string $custom_emoji_id,
    ) {
    }
}
