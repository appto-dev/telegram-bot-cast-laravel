<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class Venue extends Data implements TelegramType
{
    public function __construct(
        /** @var  Location  Venue location. Can't be a live location. */
        public Location $location,
        /** @var  string  Name of the venue */
        public string $title,
        /** @var  string  Address of the venue */
        public string $address,
        /** @var  string|null  Foursquare identifier of the venue */
        public ?string $foursquare_id,
        /**
         * @var  string|null  Foursquare type of the venue. (For example, "arts_entertainment/default",
         * "arts_entertainment/aquarium" or "food/icecream".)
         */
        public ?string $foursquare_type,
        /** @var  string|null  Google Places identifier of the venue */
        public ?string $google_place_id,
        /** @var  string|null  Google Places type of the venue. (See supported types.) */
        public ?string $google_place_type,
    ) {
    }
}
