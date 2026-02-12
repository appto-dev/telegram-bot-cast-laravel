<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputPaidMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The paid media to send is a photo.
 */
final class InputPaidMediaPhoto extends Data implements TelegramBotData, InputPaidMedia
{
    public function __construct(
        /** Type of the media, must be photo */
        public string $type,
        /**
         * File to send. Pass a file_id to send a file that exists on the Telegram servers
         * (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or
         * pass "attach://<file_attach_name>" to upload a new one using multipart/form-data
         * under <file_attach_name> name. More information on Sending Files
         */
        public InputFile|string $media,
    ) {
    }
}
