<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * A static profile photo in the .JPG format.
 */
final class InputProfilePhotoStatic extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the profile photo, must be "static"
         * @var string
         */
        public string $type,
        /**
         * The static profile photo. Profile photos can't be reused and can only be
         * uploaded as a new file, so you can pass "attach://<file_attach_name>" if the
         * photo was uploaded using multipart/form-data under <file_attach_name>. More
         * information on Sending Files
         * @var InputFile|string
         */
        public InputFile|string $photo,
    ) {
    }
}
