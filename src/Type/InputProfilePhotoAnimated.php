<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * An animated profile photo in the MPEG4 format.
 */
final class InputProfilePhotoAnimated extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The animated profile photo. Profile photos can't be reused and can only be
         * uploaded as a new file, so you can pass "attach://<file_attach_name>" if the
         * photo was uploaded using multipart/form-data under <file_attach_name>. More
         * information on Sending Files
         * @var InputFile|string
         */
        public InputFile|string $animation,
        /**
         * Timestamp in seconds of the frame that will be used as the static profile photo.
         * Defaults to 0.0.
         * @var float
         */
        public ?float $main_frame_timestamp,
        /**
         * Type of the profile photo, must be animated
         * @var string
         */
        public string $type = 'animated',
    ) {
    }
}
