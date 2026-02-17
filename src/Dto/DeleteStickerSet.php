<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to delete a sticker set that was created by the bot. Returns <em>True</em> on success.
 */
final class DeleteStickerSet extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Sticker set name */
        public string $name,
    ) {
    }
}
