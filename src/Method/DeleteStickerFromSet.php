<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle stickers and sticker sets.
 */
class DeleteStickerFromSet extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  File identifier of the sticker */
        public string $sticker,
    ) {
    }
}
