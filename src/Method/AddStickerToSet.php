<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\InputSticker;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle stickers and sticker sets.
 */
class AddStickerToSet extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  User identifier of sticker set owner */
        public int $user_id,
        /** @var  string  Sticker set name */
        public string $name,
        /**
         * @var  InputSticker  A JSON-serialized object with information about the added sticker. If exactly
         * the same sticker had already been added to the set, then the set isn't changed.
         */
        public InputSticker $sticker,
    ) {
    }
}
