<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to set the title of a created sticker set. Returns <em>True</em> on success.
 */
final class SetStickerSetTitle extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Sticker set name */
        public string $name,
        /** Sticker set title, 1-64 characters */
        public string $title,
    ) {
    }
}
