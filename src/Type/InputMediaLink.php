<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class InputMediaLink extends Data implements TelegramType, InputPollOptionMedia
{
    public function __construct(
        /** @var  string  Type of the media, must be link */
        public string $type,
        /** @var  string  HTTP URL of the link */
        public string $url,
    ) {
    }
}
