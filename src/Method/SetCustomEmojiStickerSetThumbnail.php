<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle stickers and sticker sets.
 */
class SetCustomEmojiStickerSetThumbnail extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Sticker set name */
        public string $name,
        /**
         * @var  string|null  Custom emoji identifier of a sticker from the sticker set; pass an empty string
         * to drop the thumbnail and use the first sticker as the thumbnail
         */
        public ?string $custom_emoji_id,
    ) {
    }
}
