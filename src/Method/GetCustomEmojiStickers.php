<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle stickers and sticker sets.
 */
class GetCustomEmojiStickers extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  string[]  A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji
         * identifiers can be specified.
         */
        public array $custom_emoji_ids,
    ) {
    }
}
