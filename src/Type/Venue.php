<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a venue.
 *
 * @version Telegram Bot API 7.10
 */
final class Venue extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Venue location. Can't be a live location
         * @var Location
         */
        public Location $location,
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
         * Foursquare identifier of the venue
         * @var string
         */
        public ?string $foursquare_id,
        /**
         * Foursquare type of the venue. (For example, "arts_entertainment/default",
         * "arts_entertainment/aquarium" or "food/icecream".)
         * @var string
         */
        public ?string $foursquare_type,
        /**
         * Google Places identifier of the venue
         * @var string
         */
        public ?string $google_place_id,
        /**
         * Google Places type of the venue. (See supported types.)
         * @var string
         */
        public ?string $google_place_type,
    ) {
    }
}
