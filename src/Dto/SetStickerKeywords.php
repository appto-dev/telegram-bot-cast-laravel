<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker must
 * belong to a sticker set created by the bot. Returns <em>True</em> on success.
 */
final class SetStickerKeywords extends Dto implements TelegramBotDto
{
    public function __construct(
        /** File identifier of the sticker */
        public string $sticker,
        /** A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters */
        public ?array $keywords,
    ) {
    }
}
