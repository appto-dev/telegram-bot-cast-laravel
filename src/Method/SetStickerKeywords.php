<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle stickers and sticker sets.
 */
class SetStickerKeywords extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  File identifier of the sticker */
        public string $sticker,
        /**
         * @var  string[]|null  A JSON-serialized list of 0-20 search keywords for the sticker with total
         * length of up to 64 characters
         */
        public ?array $keywords,
    ) {
    }
}
