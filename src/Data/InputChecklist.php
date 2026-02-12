<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a checklist to create.
 */
final class InputChecklist extends Data implements TelegramBotData
{
    public function __construct(
        /** Title of the checklist; 1-255 characters after entities parsing */
        public string $title,
        /** Mode for parsing entities in the title. See formatting options for more details. */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in the title, which can be specified
         * instead of parse_mode. Currently, only bold, italic, underline, strikethrough,
         * spoiler, and custom_emoji entities are allowed.
         */
        public ?MessageEntity $title_entities,
        /** List of 1-30 tasks in the checklist */
        public InputChecklistTask $tasks,
        /** Pass True if other users can add tasks to the checklist */
        public ?bool $others_can_add_tasks,
        /** Pass True if other users can mark tasks as done or not done in the checklist */
        public ?bool $others_can_mark_tasks_as_done,
    ) {
    }
}
