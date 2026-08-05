<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class LocationAddress extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string  The two-letter ISO 3166-1 alpha-2 country code of the country where the location is
         * located
         */
        public string $country_code,
        /** @var  string|null  State of the location */
        public ?string $state,
        /** @var  string|null  City of the location */
        public ?string $city,
        /** @var  string|null  Street address of the location */
        public ?string $street,
    ) {
    }
}
