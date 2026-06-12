<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * At most one of the optional fields can be present in any given object.
 */
final class PollMedia extends Data implements TelegramBotData
{
    public function __construct(
        /** Media is an animation, information about the animation */
        public ?Animation $animation,
        /** Media is an audio file, information about the file; currently, can't be received in a poll option */
        public ?Audio $audio,
        /** Media is a general file, information about the file; currently, can't be received in a poll option */
        public ?Document $document,
        /** The HTTP link attached to the poll option */
        public ?Link $link,
        /** Media is a live photo, information about the live photo */
        public ?LivePhoto $live_photo,
        /** Media is a shared location, information about the location */
        public ?Location $location,
        /**
         * Media is a photo, available sizes of the photo
         * @var array<PhotoSize>
         */
        public ?array $photo,
        /** Media is a sticker, information about the sticker; currently, for poll options only */
        public ?Sticker $sticker,
        /** Media is a venue, information about the venue */
        public ?Venue $venue,
        /** Media is a video, information about the video */
        public ?Video $video,
    ) {
    }
}
