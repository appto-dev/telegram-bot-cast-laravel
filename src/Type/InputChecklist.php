<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class InputChecklist extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Title of the checklist; 1-255 characters after entities parsing */
        public string $title,
        /** @var  string|null  Mode for parsing entities in the title. See formatting options for more details. */
        public ?string $parse_mode,
        /**
         * @var  MessageEntity[]|null  List of special entities that appear in the title, which can be
         * specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler,
         * custom_emoji, and date_time entities are allowed.
         */
        public ?array $title_entities,
        /** @var  InputChecklistTask[]  List of 1-30 tasks in the checklist */
        public array $tasks,
        /** @var  bool|null  Pass True if other users can add tasks to the checklist */
        public ?bool $others_can_add_tasks,
        /** @var  bool|null  Pass True if other users can mark tasks as done or not done in the checklist */
        public ?bool $others_can_mark_tasks_as_done,
    ) {
    }
}
