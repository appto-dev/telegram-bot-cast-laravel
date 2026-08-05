<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class InputChecklistTask extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int  Unique identifier of the task; must be positive and unique among all task identifiers
         * currently present in the checklist
         */
        public int $id,
        /** @var  string  Text of the task; 1-100 characters after entities parsing */
        public string $text,
        /** @var  string|null  Mode for parsing entities in the text. See formatting options for more details. */
        public ?string $parse_mode,
        /**
         * @var  MessageEntity[]|null  List of special entities that appear in the text, which can be specified
         * instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler,
         * custom_emoji, and date_time entities are allowed.
         */
        public ?array $text_entities,
    ) {
    }
}
