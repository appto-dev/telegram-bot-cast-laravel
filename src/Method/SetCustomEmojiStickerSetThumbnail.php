<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * SetCustomEmojiStickerSetThumbnail
 *
 * Use this method to set the thumbnail of a custom emoji sticker set. Returns True
 * on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class SetCustomEmojiStickerSetThumbnail extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /** Sticker set name */
        public string $name,
        /**
         * Custom emoji identifier of a sticker from the sticker set; pass an
         * empty string to drop the thumbnail and use the first sticker as the
         * thumbnail.
         */
        public ?string $custom_emoji_id,
    ) {
    }
}
