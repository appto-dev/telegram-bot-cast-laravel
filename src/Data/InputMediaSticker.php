<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputPollOptionMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents a sticker file to be sent.
 */
final class InputMediaSticker extends Data implements TelegramBotData, InputPollOptionMedia
{
    public function __construct(
        /** Type of the media, must be sticker */
        public string $type,
        /**
         * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP
         * URL for Telegram to get a .WEBP sticker from the Internet, or pass "attach://<file_attach_name>" to upload a
         * new .WEBP, .TGS, or .WEBM sticker using multipart/form-data under <file_attach_name> name. More information on
         * Sending Files
         */
        public InputFile|string $media,
        /** Emoji associated with the sticker; only for just uploaded stickers */
        public ?string $emoji,
    ) {
    }
}
