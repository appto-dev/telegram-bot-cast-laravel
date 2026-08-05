<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChecklistTasksDone extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  Message|null  Message containing the checklist whose tasks were marked as done or not done.
         * Note that the Message object in this field will not contain the reply_to_message field even if it
         * itself is a reply.
         */
        public ?Message $checklist_message,
        /** @var  int[]|null  Identifiers of the tasks that were marked as done */
        public ?array $marked_as_done_task_ids,
        /** @var  int[]|null  Identifiers of the tasks that were marked as not done */
        public ?array $marked_as_not_done_task_ids,
    ) {
    }
}
