<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\MaybeInaccessibleMessage;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about an option deleted from a poll.
 */
final class PollOptionDeleted extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Message containing the poll from which the option was deleted, if known. Note that the Message object in this
         * field will not contain the reply_to_message field even if it itself is a reply.
         */
        public ?MaybeInaccessibleMessage $poll_message,
        /** Unique identifier of the deleted option */
        public string $option_persistent_id,
        /** Option text */
        public string $option_text,
        /**
         * Special entities that appear in the option_text
         * @var array<MessageEntity>
         */
        public ?array $option_text_entities,
    ) {
    }
}
