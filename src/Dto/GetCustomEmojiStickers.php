<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of <a
 * href="https://core.telegram.org/bots/api#sticker">Sticker</a> objects.
 */
final class GetCustomEmojiStickers extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
         * @var string[]
         */
        public array $custom_emoji_ids,
    ) {
    }
}
