<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputMessageContent;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="https://core.telegram.org/bots/api#inputmessagecontent">content</a> of a venue message to be
 * sent as the result of an inline query.
 */
final class InputVenueMessageContent extends Data implements TelegramBotData, InputMessageContent
{
    public function __construct(
        /** Latitude of the venue in degrees */
        public float $latitude,
        /** Longitude of the venue in degrees */
        public float $longitude,
        /** Name of the venue */
        public string $title,
        /** Address of the venue */
        public string $address,
        /** Foursquare identifier of the venue, if known */
        public ?string $foursquare_id,
        /**
         * Foursquare type of the venue, if known. (For example, "arts_entertainment/default", "arts_entertainment/aquarium" or
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
