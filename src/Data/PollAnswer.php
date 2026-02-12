<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 */
final class PollAnswer extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique poll identifier */
        public string $poll_id,
        /** The chat that changed the answer to the poll, if the voter is anonymous */
        public ?Chat $voter_chat,
        /** The user that changed the answer to the poll, if the voter isn't anonymous */
        public ?User $user,
        /**
         * 0-based identifiers of chosen answer options. May be empty if the vote was
         * retracted.
         */
        public array $option_ids,
    ) {
    }
}
