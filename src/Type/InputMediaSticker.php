<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class InputMediaSticker extends Data implements TelegramType, InputPollOptionMedia
{
    public function __construct(
        /** @var  string  Type of the media, must be sticker */
        public string $type,
        /**
         * @var  InputFile|string  File to send. Pass a file_id to send a file that exists on the Telegram
         * servers (recommended), pass an HTTP URL for Telegram to get a .WEBP sticker from the Internet, or
         * pass "attach://<file_attach_name>" to upload a new .WEBP, .TGS, or .WEBM sticker using
         * multipart/form-data under <file_attach_name> name. More information on Sending Files
         */
        public InputFile|string $media,
        /** @var  string|null  Emoji associated with the sticker; only for just uploaded stickers */
        public ?string $emoji,
    ) {
    }
}
