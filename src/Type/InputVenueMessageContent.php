<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to work in
 * <a href="/bots/inline">inline mode</a>.Please see our
 * <a href="/bots/inline">Introduction to Inline bots</a> for more details.
 * To enable this option, send the /setinline command to
 * <a href="https://t.me/botfather">@BotFather</a> and provide the placeholder text that the user will
 * see in the input field after typing your bot's name.
 */
class InputVenueMessageContent extends Data implements TelegramType, InputMessageContent
{
    public function __construct(
        /** @var  float  Latitude of the venue in degrees */
        public float $latitude,
        /** @var  float  Longitude of the venue in degrees */
        public float $longitude,
        /** @var  string  Name of the venue */
        public string $title,
        /** @var  string  Address of the venue */
        public string $address,
        /** @var  string|null  Foursquare identifier of the venue, if known */
        public ?string $foursquare_id,
        /**
         * @var  string|null  Foursquare type of the venue, if known. (For example,
         * "arts_entertainment/default", "arts_entertainment/aquarium" or "food/icecream".)
         */
        public ?string $foursquare_type,
        /** @var  string|null  Google Places identifier of the venue */
        public ?string $google_place_id,
        /** @var  string|null  Google Places type of the venue. (See supported types.) */
        public ?string $google_place_type,
    ) {
    }
}
