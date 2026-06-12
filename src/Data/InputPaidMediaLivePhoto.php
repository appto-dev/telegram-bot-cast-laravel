<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputPaidMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The paid media to send is a live photo.
 */
final class InputPaidMediaLivePhoto extends Data implements TelegramBotData, InputPaidMedia
{
    public function __construct(
        /** Type of the media, must be live_photo */
        public string $type,
        /**
         * Video of the live photo to send. Pass a file_id to send a file that exists on the Telegram servers
         * (recommended) or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under
         * <file_attach_name> name. More information on Sending Files . Sending live photos by a URL is currently
         * unsupported.
         */
        public InputFile|string $media,
        /**
         * The static photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or
         * pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name>
         * name. More information on Sending Files . Sending live photos by a URL is currently unsupported.
         */
        public InputFile|string $photo,
    ) {
    }
}
