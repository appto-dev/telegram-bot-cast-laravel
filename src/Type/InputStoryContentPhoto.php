<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a photo to post as a story.
 */
final class InputStoryContentPhoto extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The photo to post as a story. The photo must be of the size 1080x1920 and must
         * not exceed 10 MB. The photo can't be reused and can only be uploaded as a new
         * file, so you can pass "attach://<file_attach_name>" if the photo was uploaded
         * using multipart/form-data under <file_attach_name>. More information on Sending
         * Files
         * @var InputFile|string
         */
        public InputFile|string $photo,
        /**
         * Type of the content, must be photo
         * @var string
         */
        public string $type = 'photo',
    ) {
    }
}
