<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a venue.
 */
final class Venue extends Data implements TelegramBotData
{
    public function __construct(
        /** Venue location. Can't be a live location */
        public Location $location,
        /** Name of the venue */
        public string $title,
        /** Address of the venue */
        public string $address,
        /** Foursquare identifier of the venue */
        public ?string $foursquare_id,
        /**
         * Foursquare type of the venue. (For example, "arts_entertainment/default", "arts_entertainment/aquarium" or
         * "food/icecream".)
         */
        public ?string $foursquare_type,
        /** Google Places identifier of the venue */
        public ?string $google_place_id,
        /** Google Places type of the venue. (See supported types.) */
        public ?string $google_place_type,
    ) {
    }
}
