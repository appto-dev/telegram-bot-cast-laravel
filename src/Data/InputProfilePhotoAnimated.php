<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputProfilePhoto;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * An animated profile photo in the MPEG4 format.
 */
final class InputProfilePhotoAnimated extends Data implements TelegramBotData, InputProfilePhoto
{
    public function __construct(
        /** Type of the profile photo, must be animated */
        public string $type,
        /**
         * The animated profile photo. Profile photos can't be reused and can only be
         * uploaded as a new file, so you can pass "attach://<file_attach_name>" if the
         * photo was uploaded using multipart/form-data under <file_attach_name>. More
         * information on Sending Files
         */
        public InputFile|string $animation,
        /**
         * Timestamp in seconds of the frame that will be used as the static profile photo.
         * Defaults to 0.0.
         */
        public ?float $main_frame_timestamp,
    ) {
    }
}
