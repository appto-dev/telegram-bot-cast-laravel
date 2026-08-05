<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class InputPaidMediaLivePhoto extends Data implements TelegramType, InputPaidMedia
{
    public function __construct(
        /** @var  string  Type of the media, must be live_photo */
        public string $type,
        /**
         * @var  InputFile|string  Video of the live photo to send. Pass a file_id to send a file that exists
         * on the Telegram servers (recommended) or pass "attach://<file_attach_name>" to upload a new one
         * using multipart/form-data under <file_attach_name> name. More information on Sending Files . Sending
         * live photos by a URL is currently unsupported.
         */
        public InputFile|string $media,
        /**
         * @var  InputFile|string  The static photo to send. Pass a file_id to send a file that exists on the
         * Telegram servers (recommended) or pass "attach://<file_attach_name>" to upload a new one using
         * multipart/form-data under <file_attach_name> name. More information on Sending Files . Sending live
         * photos by a URL is currently unsupported.
         */
        public InputFile|string $photo,
    ) {
    }
}
