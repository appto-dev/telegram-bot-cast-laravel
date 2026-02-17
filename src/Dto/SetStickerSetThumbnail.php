<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\InputFile;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to set the thumbnail of a regular or mask sticker set. The format of the thumbnail file must
 * match the format of the stickers in the set. Returns <em>True</em> on success.
 */
final class SetStickerSetThumbnail extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Sticker set name */
        public string $name,
        /** User identifier of the sticker set owner */
        public int $user_id,
        /**
         * A <strong>.WEBP</strong> or <strong>.PNG</strong> image with the thumbnail, must be up to 128 kilobytes in
         * size and have a width and height of exactly 100px, or a <strong>.TGS</strong> animation with a thumbnail up to
         * 32 kilobytes in size (see <a href="/stickers#animation-requirements"></a><a
         * href="https://core.telegram.org/stickers#animation-requirements">https://core.telegram.org/stickers#animation-requirements</a>
         * for animated sticker technical requirements), or a <strong>.WEBM</strong> video with the thumbnail up to 32
         * kilobytes in size; see <a href="/stickers#video-requirements"></a><a
         * href="https://core.telegram.org/stickers#video-requirements">https://core.telegram.org/stickers#video-requirements</a>
         * for video sticker technical requirements. Pass a <em>file_id</em> as a String to send a file that already
         * exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or
         * upload a new one using multipart/form-data. <a href="#sending-files">More information on Sending Files </a>.
         * Animated and video sticker set thumbnails can't be uploaded via HTTP URL. If omitted, then the thumbnail is
         * dropped and the first sticker is used as the thumbnail.
         */
        public InputFile|string|null $thumbnail,
        /**
         * Format of the thumbnail, must be one of "static" for a <strong>.WEBP</strong> or <strong>.PNG</strong> image,
         * "animated" for a <strong>.TGS</strong> animation, or "video" for a <strong>.WEBM</strong> video
         */
        public string $format,
    ) {
    }
}
