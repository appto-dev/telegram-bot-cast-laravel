<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a checklist.
 */
final class Checklist extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Title of the checklist
         * @var string
         */
        public string $title,
        /**
         * Special entities that appear in the checklist title
         * @var MessageEntity[]
         */
        public ?array $title_entities,
        /**
         * List of tasks in the checklist
         * @var ChecklistTask[]
         */
        public array $tasks,
        /**
         * True, if users other than the creator of the list can add tasks to the list
         * @var true
         */
        public ?true $others_can_add_tasks,
        /**
         * True, if users other than the creator of the list can mark tasks as done or not
         * done
         * @var true
         */
        public ?true $others_can_mark_tasks_as_done,
    ) {
    }
}
