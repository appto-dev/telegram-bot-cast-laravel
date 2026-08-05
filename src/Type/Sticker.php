<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle stickers and sticker sets.
 */
class Sticker extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Identifier for this file, which can be used to download or reuse the file */
        public string $file_id,
        /**
         * @var  string  Unique identifier for this file, which is supposed to be the same over time and for
         * different bots. Can't be used to download or reuse the file.
         */
        public string $file_unique_id,
        /**
         * @var  string  Type of the sticker, currently one of "regular", "mask", "custom_emoji". The type of
         * the sticker is independent from its format, which is determined by the fields is_animated and
         * is_video.
         */
        public string $type,
        /** @var  int  Sticker width */
        public int $width,
        /** @var  int  Sticker height */
        public int $height,
        /** @var  bool  True, if the sticker is animated */
        public bool $is_animated,
        /** @var  bool  True, if the sticker is a video sticker */
        public bool $is_video,
        /** @var  PhotoSize|null  Sticker thumbnail in the .WEBP or .JPG format */
        public ?PhotoSize $thumbnail,
        /** @var  string|null  Emoji associated with the sticker */
        public ?string $emoji,
        /** @var  string|null  Name of the sticker set to which the sticker belongs */
        public ?string $set_name,
        /** @var  File|null  For premium regular stickers, premium animation for the sticker */
        public ?File $premium_animation,
        /** @var  MaskPosition|null  For mask stickers, the position where the mask should be placed */
        public ?MaskPosition $mask_position,
        /** @var  string|null  For custom emoji stickers, unique identifier of the custom emoji */
        public ?string $custom_emoji_id,
        /**
         * @var  true|null  True, if the sticker must be repainted to a text color in messages, the color of
         * the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color
         * in other places
         */
        public ?true $needs_repainting,
        /** @var  int|null  File size in bytes */
        public ?int $file_size,
    ) {
    }
}
