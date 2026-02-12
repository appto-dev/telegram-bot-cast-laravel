<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes the physical address of a location.
 */
final class LocationAddress extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * The two-letter ISO 3166-1 alpha-2 country code of the country where the location
         * is located
         */
        public string $country_code,
        /** State of the location */
        public ?string $state,
        /** City of the location */
        public ?string $city,
        /** Street address of the location */
        public ?string $street,
    ) {
    }
}
