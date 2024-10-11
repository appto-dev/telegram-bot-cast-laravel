<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a sticker.
 *
 * @version Telegram Bot API 7.10
 */
final class Sticker extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Identifier for this file, which can be used to download or reuse the file
         * @var string
         */
        public string $file_id,
        /**
         * Unique identifier for this file, which is supposed to be the same over time and
         * for different bots. Can't be used to download or reuse the file.
         * @var string
         */
        public string $file_unique_id,
        /**
         * Type of the sticker, currently one of "regular", "mask", "custom_emoji". The
         * type of the sticker is independent from its format, which is determined by the
         * fields is_animated and is_video.
         * @var string
         */
        public string $type,
        /**
         * Sticker width
         * @var int
         */
        public int $width,
        /**
         * Sticker height
         * @var int
         */
        public int $height,
        /**
         * True, if the sticker is animated
         * @var bool
         */
        public bool $is_animated,
        /**
         * True, if the sticker is a video sticker
         * @var bool
         */
        public bool $is_video,
        /**
         * Sticker thumbnail in the .WEBP or .JPG format
         * @var PhotoSize
         */
        public ?PhotoSize $thumbnail,
        /**
         * Emoji associated with the sticker
         * @var string
         */
        public ?string $emoji,
        /**
         * Name of the sticker set to which the sticker belongs
         * @var string
         */
        public ?string $set_name,
        /**
         * For premium regular stickers, premium animation for the sticker
         * @var File
         */
        public ?File $premium_animation,
        /**
         * For mask stickers, the position where the mask should be placed
         * @var MaskPosition
         */
        public ?MaskPosition $mask_position,
        /**
         * For custom emoji stickers, unique identifier of the custom emoji
         * @var string
         */
        public ?string $custom_emoji_id,
        /**
         * True, if the sticker must be repainted to a text color in messages, the color of
         * the Telegram Premium badge in emoji status, white color on chat photos, or
         * another appropriate color in other places
         * @var true
         */
        public ?true $needs_repainting,
        /**
         * File size in bytes
         * @var int
         */
        public ?int $file_size,
    ) {
    }
}
