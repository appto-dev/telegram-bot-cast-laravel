<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes the physical address of a location.
 */
final class LocationAddress extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The two-letter ISO 3166-1 alpha-2 country code of the country where the location
         * is located
         * @var string
         */
        public string $country_code,
        /**
         * State of the location
         * @var string
         */
        public ?string $state,
        /**
         * City of the location
         * @var string
         */
        public ?string $city,
        /**
         * Street address of the location
         * @var string
         */
        public ?string $street,
    ) {
    }
}
