<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a task in a checklist.
 */
final class ChecklistTask extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique identifier of the task */
        public int $id,
        /** Text of the task */
        public string $text,
        /** Special entities that appear in the task text */
        public ?MessageEntity $text_entities,
        /** User that completed the task; omitted if the task wasn't completed by a user */
        public ?User $completed_by_user,
        /** Chat that completed the task; omitted if the task wasn't completed by a chat */
        public ?Chat $completed_by_chat,
        /** Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't completed */
        public ?int $completion_date,
    ) {
    }
}
