<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChecklistTask extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  Unique identifier of the task */
        public int $id,
        /** @var  string  Text of the task */
        public string $text,
        /** @var  MessageEntity[]|null  Special entities that appear in the task text */
        public ?array $text_entities,
        /** @var  User|null  User that completed the task; omitted if the task wasn't completed by a user */
        public ?User $completed_by_user,
        /** @var  Chat|null  Chat that completed the task; omitted if the task wasn't completed by a chat */
        public ?Chat $completed_by_chat,
        /**
         * @var  int|null  Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't
         * completed
         */
        public ?int $completion_date,
    ) {
    }
}
