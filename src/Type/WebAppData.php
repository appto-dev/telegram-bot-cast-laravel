<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class WebAppData extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  The data. Be aware that a bad client can send arbitrary data in this field. */
        public string $data,
        /**
         * @var  string  Text of the web_app keyboard button from which the Web App was opened. Be aware that a
         * bad client can send arbitrary data in this field.
         */
        public string $button_text,
    ) {
    }
}
