<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * @version Telegram Bot API 7.10
 */
final class PollAnswer extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique poll identifier
         * @var string
         */
        public string $poll_id,
        /**
         * The chat that changed the answer to the poll, if the voter is anonymous
         * @var Chat
         */
        public ?Chat $voter_chat,
        /**
         * The user that changed the answer to the poll, if the voter isn't anonymous
         * @var User
         */
        public ?User $user,
        /**
         * 0-based identifiers of chosen answer options. May be empty if the vote was
         * retracted.
         * @var array<int>
         */
        public int $option_ids,
    ) {
    }
}
