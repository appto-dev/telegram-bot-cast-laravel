<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class Checklist extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Title of the checklist */
        public string $title,
        /** @var  MessageEntity[]|null  Special entities that appear in the checklist title */
        public ?array $title_entities,
        /** @var  ChecklistTask[]  List of tasks in the checklist */
        public array $tasks,
        /** @var  true|null  True, if users other than the creator of the list can add tasks to the list */
        public ?true $others_can_add_tasks,
        /**
         * @var  true|null  True, if users other than the creator of the list can mark tasks as done or not
         * done
         */
        public ?true $others_can_mark_tasks_as_done,
    ) {
    }
}
