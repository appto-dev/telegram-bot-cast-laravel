<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class PollMedia extends Data implements TelegramType
{
    public function __construct(
        /** @var  Animation|null  Media is an animation, information about the animation */
        public ?Animation $animation,
        /**
         * @var  Audio|null  Media is an audio file, information about the file; currently, can't be received
         * in a poll option
         */
        public ?Audio $audio,
        /**
         * @var  Document|null  Media is a general file, information about the file; currently, can't be
         * received in a poll option
         */
        public ?Document $document,
        /** @var  Link|null  The HTTP link attached to the poll option */
        public ?Link $link,
        /** @var  LivePhoto|null  Media is a live photo, information about the live photo */
        public ?LivePhoto $live_photo,
        /** @var  Location|null  Media is a shared location, information about the location */
        public ?Location $location,
        /** @var  PhotoSize[]|null  Media is a photo, available sizes of the photo */
        public ?array $photo,
        /**
         * @var  Sticker|null  Media is a sticker, information about the sticker; currently, for poll options
         * only
         */
        public ?Sticker $sticker,
        /** @var  Venue|null  Media is a venue, information about the venue */
        public ?Venue $venue,
        /** @var  Video|null  Media is a video, information about the video */
        public ?Video $video,
    ) {
    }
}
