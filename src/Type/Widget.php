<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may not be returned when irrelevant.
 */
class Widget extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string|null  Unique identifier of the shared widget, which can be used to send the widget
         * again using the method sendSharedWidget; omitted if the widget isn't shared
         */
        public ?string $id,
        /**
         * @var  int|null  Width of the widget in logical pixels; omitted if the widget must occupy the whole
         * width of the message bubble
         */
        public ?int $width,
        /**
         * @var  int|null  Height of the widget in logical pixels; omitted if the height of the widget isn't
         * fixed
         */
        public ?int $height,
        /** @var  string  HTML code of the widget */
        public string $html,
        /**
         * @var  string|null  Public data of the widget, which is available wherever the widget is shown. All
         * messages with a shared widget have the same public data.
         */
        public ?string $public_data,
        /** @var  string|null  Data of the widget, which is specific to the message */
        public ?string $chat_data,
    ) {
    }
}
