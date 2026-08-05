<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class KeyboardButtonPollType extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string|null  If quiz is passed, the user will be allowed to create only polls in the quiz
         * mode. If regular is passed, only regular polls will be allowed. Otherwise, the user will be allowed
         * to create a poll of any type.
         */
        public ?string $type,
    ) {
    }
}
