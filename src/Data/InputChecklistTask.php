<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a task to add to a checklist.
 */
final class InputChecklistTask extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier of the task; must be positive and unique among all task identifiers currently present in the
         * checklist
         */
        public int $id,
        /** Text of the task; 1-100 characters after entities parsing */
        public string $text,
        /** Mode for parsing entities in the text. See formatting options for more details. */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in the text, which can be specified instead of parse_mode. Currently,
         * only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are allowed.
         * @var MessageEntity[]
         */
        public ?array $text_entities,
    ) {
    }
}
