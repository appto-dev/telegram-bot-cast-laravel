<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The sticker must
 * belong to a sticker set created by the bot. Returns <em>True</em> on success.
 */
final class SetStickerEmojiList extends Dto implements TelegramBotDto
{
    public function __construct(
        /** File identifier of the sticker */
        public string $sticker,
        /** A JSON-serialized list of 1-20 emoji associated with the sticker */
        public array $emoji_list,
    ) {
    }
}
