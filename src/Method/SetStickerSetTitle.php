<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle stickers and sticker sets.
 */
class SetStickerSetTitle extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Sticker set name */
        public string $name,
        /** @var  string  Sticker set title, 1-64 characters */
        public string $title,
    ) {
    }
}
