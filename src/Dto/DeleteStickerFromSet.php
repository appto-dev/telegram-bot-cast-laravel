<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to delete a sticker from a set created by the bot. Returns
 * <em>True</em> on success.
 */
final class DeleteStickerFromSet extends Dto implements TelegramBotDto
{
    public function __construct(
        /** File identifier of the sticker */
        public string $sticker,
    ) {
    }
}
