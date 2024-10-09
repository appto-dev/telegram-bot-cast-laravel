<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="#inputmessagecontent">content</a> of a venue message to
 * be sent as the result of an inline query.
 *
 * @version Telegram Bot API 7.10
 */
final class InputVenueMessageContent extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Latitude of the venue in degrees
         * @var float
         */
        public float $latitude,
        /**
         * Longitude of the venue in degrees
         * @var float
         */
        public float $longitude,
        /**
         * Name of the venue
         * @var string
         */
        public string $title,
        /**
         * Address of the venue
         * @var string
         */
        public string $address,
        /**
         * Foursquare identifier of the venue, if known
         * @var string|null
         */
        public ?string $foursquare_id,
        /**
         * Foursquare type of the venue, if known. (For example,
         * "arts_entertainment/default", "arts_entertainment/aquarium" or "food/icecream".)
         * @var string|null
         */
        public ?string $foursquare_type,
        /**
         * Google Places identifier of the venue
         * @var string|null
         */
        public ?string $google_place_id,
        /**
         * Google Places type of the venue. (See supported types.)
         * @var string|null
         */
        public ?string $google_place_type,
    ) {
    }
}
