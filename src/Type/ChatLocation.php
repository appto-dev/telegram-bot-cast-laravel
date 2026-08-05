<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChatLocation extends Data implements TelegramType
{
    public function __construct(
        /** @var  Location  The location to which the supergroup is connected. Can't be a live location. */
        public Location $location,
        /** @var  string  Location address; 1-64 characters, as defined by the chat owner */
        public string $address,
    ) {
    }
}
