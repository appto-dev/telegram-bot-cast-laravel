<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a checklist to create.
 */
final class InputChecklist extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Title of the checklist; 1-255 characters after entities parsing
         * @var string
         */
        public string $title,
        /**
         * Mode for parsing entities in the title. See formatting options for more details.
         * @var string
         */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in the title, which can be specified
         * instead of parse_mode. Currently, only bold, italic, underline, strikethrough,
         * spoiler, and custom_emoji entities are allowed.
         * @var MessageEntity[]
         */
        public ?array $title_entities,
        /**
         * List of 1-30 tasks in the checklist
         * @var InputChecklistTask[]
         */
        public array $tasks,
        /**
         * Pass True if other users can add tasks to the checklist
         * @var bool
         */
        public ?bool $others_can_add_tasks,
        /**
         * Pass True if other users can mark tasks as done or not done in the checklist
         * @var bool
         */
        public ?bool $others_can_mark_tasks_as_done,
    ) {
    }
}
