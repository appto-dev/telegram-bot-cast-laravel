<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a video to post as a story.
 */
final class InputStoryContentVideo extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The video to post as a story. The video must be of the size 720x1280,
         * streamable, encoded with H.265 codec, with key frames added each second in the
         * MPEG4 format, and must not exceed 30 MB. The video can't be reused and can only
         * be uploaded as a new file, so you can pass "attach://<file_attach_name>" if the
         * video was uploaded using multipart/form-data under <file_attach_name>. More
         * information on Sending Files
         * @var InputFile|string
         */
        public InputFile|string $video,
        /**
         * Precise duration of the video in seconds; 0-60
         * @var float
         */
        public ?float $duration,
        /**
         * Timestamp in seconds of the frame that will be used as the static cover for the
         * story. Defaults to 0.0.
         * @var float
         */
        public ?float $cover_frame_timestamp,
        /**
         * Pass True if the video has no sound
         * @var bool
         */
        public ?bool $is_animation,
        /**
         * Type of the content, must be video
         * @var string
         */
        public string $type = 'video',
    ) {
    }
}
