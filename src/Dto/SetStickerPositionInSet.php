<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to move a sticker in a set created by the bot to a specific position. Returns <em>True</em> on
 * success.
 */
final class SetStickerPositionInSet extends Dto implements TelegramBotDto
{
    public function __construct(
        /** File identifier of the sticker */
        public string $sticker,
        /** New sticker position in the set, zero-based */
        public int $position,
    ) {
    }
}
