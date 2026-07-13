<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputPollMedia;
use Appto\TelegramBot\Interfaces\InputPollOptionMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents a venue to be sent.
 */
final class InputMediaVenue extends Data implements TelegramBotData, InputPollMedia, InputPollOptionMedia
{
    public function __construct(
        /** Type of the media, must be venue */
        public string $type,
        /** Latitude of the location */
        public float $latitude,
        /** Longitude of the location */
        public float $longitude,
        /** Name of the venue */
        public string $title,
        /** Address of the venue */
        public string $address,
        /** Foursquare identifier of the venue */
        public ?string $foursquare_id,
        /**
         * Foursquare type of the venue, if known. (For example, "arts_entertainment/default",
         * "arts_entertainment/aquarium" or "food/icecream".)
         */
        public ?string $foursquare_type,
        /** Google Places identifier of the venue */
        public ?string $google_place_id,
        /** Google Places type of the venue. (See supported types.) */
        public ?string $google_place_type,
    ) {
    }
}
