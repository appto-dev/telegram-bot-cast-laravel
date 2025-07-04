<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a task in a checklist.
 */
final class ChecklistTask extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier of the task
         * @var int
         */
        public int $id,
        /**
         * Text of the task
         * @var string
         */
        public string $text,
        /**
         * Special entities that appear in the task text
         * @var MessageEntity[]
         */
        public ?array $text_entities,
        /**
         * User that completed the task; omitted if the task wasn't completed
         * @var User
         */
        public ?User $completed_by_user,
        /**
         * Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't
         * completed
         * @var int
         */
        public ?int $completion_date,
    ) {
    }
}
