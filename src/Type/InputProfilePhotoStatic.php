<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class InputProfilePhotoStatic extends Data implements TelegramType, InputProfilePhoto
{
    public function __construct(
        /** @var  string  Type of the profile photo, must be static */
        public string $type,
        /**
         * @var  InputFile|string  The static profile photo. Profile photos can't be reused and can only be
         * uploaded as a new file, so you can pass "attach://<file_attach_name>" if the photo was uploaded
         * using multipart/form-data under <file_attach_name>. More information on Sending Files
         */
        public InputFile|string $photo,
    ) {
    }
}
