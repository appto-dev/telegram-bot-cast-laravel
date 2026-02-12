<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputStoryContent;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a video to post as a story.
 */
final class InputStoryContentVideo extends Data implements TelegramBotData, InputStoryContent
{
    public function __construct(
        /** Type of the content, must be video */
        public string $type,
        /**
         * The video to post as a story. The video must be of the size 720x1280,
         * streamable, encoded with H.265 codec, with key frames added each second in the
         * MPEG4 format, and must not exceed 30 MB. The video can't be reused and can only
         * be uploaded as a new file, so you can pass "attach://<file_attach_name>" if the
         * video was uploaded using multipart/form-data under <file_attach_name>. More
         * information on Sending Files
         */
        public InputFile|string $video,
        /** Precise duration of the video in seconds; 0-60 */
        public ?float $duration,
        /**
         * Timestamp in seconds of the frame that will be used as the static cover for the
         * story. Defaults to 0.0.
         */
        public ?float $cover_frame_timestamp,
        /** Pass True if the video has no sound */
        public ?bool $is_animation,
    ) {
    }
}
