<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to set the thumbnail of a custom emoji sticker set. Returns
 * <em>True</em> on success.
 *
 * @version Telegram Bot API 7.11
 */
final class SetCustomEmojiStickerSetThumbnail extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Sticker set name
         * @var string
         */
        public string $name,
        /**
         * Custom emoji identifier of a sticker from the sticker set; pass an empty string
         * to drop the thumbnail and use the first sticker as the thumbnail.
         * @var string
         */
        public ?string $custom_emoji_id,
    ) {
    }
}
