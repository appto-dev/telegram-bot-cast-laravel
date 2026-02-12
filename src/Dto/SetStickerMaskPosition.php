<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\MaskPosition;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to change the <a
 * href="https://core.telegram.org/bots/api#maskposition">mask position</a> of a
 * mask sticker. The sticker must belong to a sticker set that was created by the
 * bot. Returns <em>True</em> on success.
 */
final class SetStickerMaskPosition extends Dto implements TelegramBotDto
{
    public function __construct(
        /** File identifier of the sticker */
        public string $sticker,
        /**
         * A JSON-serialized object with the position where the mask should be placed on
         * faces. Omit the parameter to remove the mask position.
         */
        public ?MaskPosition $mask_position,
    ) {
    }
}
