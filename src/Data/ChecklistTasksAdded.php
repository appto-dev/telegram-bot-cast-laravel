<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about tasks added to a checklist.
 */
final class ChecklistTasksAdded extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Message containing the checklist to which the tasks were added. Note that the Message object in this field
         * will not contain the reply_to_message field even if it itself is a reply.
         */
        public ?Message $checklist_message,
        /** List of tasks added to the checklist */
        public ChecklistTask $tasks,
    ) {
    }
}
