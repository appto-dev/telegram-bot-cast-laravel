<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object contains information about a poll.
 *
 * @version Telegram Bot API 7.10
 */
final class Poll extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique poll identifier
         * @var string
         */
        public string $id,
        /**
         * Poll question, 1-300 characters
         * @var string
         */
        public string $question,
        /**
         * Special entities that appear in the question. Currently, only custom emoji
         * entities are allowed in poll questions
         * @var MessageEntity[]
         */
        public ?array $question_entities,
        /**
         * List of poll options
         * @var PollOption[]
         */
        public array $options,
        /**
         * Total number of users that voted in the poll
         * @var int
         */
        public int $total_voter_count,
        /**
         * True, if the poll is closed
         * @var bool
         */
        public bool $is_closed,
        /**
         * True, if the poll is anonymous
         * @var bool
         */
        public bool $is_anonymous,
        /**
         * Poll type, currently can be "regular" or "quiz"
         * @var string
         */
        public string $type,
        /**
         * True, if the poll allows multiple answers
         * @var bool
         */
        public bool $allows_multiple_answers,
        /**
         * 0-based identifier of the correct answer option. Available only for polls in the
         * quiz mode, which are closed, or was sent (not forwarded) by the bot or to the
         * private chat with the bot.
         * @var int
         */
        public ?int $correct_option_id,
        /**
         * Text that is shown when a user chooses an incorrect answer or taps on the lamp
         * icon in a quiz-style poll, 0-200 characters
         * @var string
         */
        public ?string $explanation,
        /**
         * Special entities like usernames, URLs, bot commands, etc. that appear in the
         * explanation
         * @var MessageEntity[]
         */
        public ?array $explanation_entities,
        /**
         * Amount of time in seconds the poll will be active after creation
         * @var int
         */
        public ?int $open_period,
        /**
         * Point in time (Unix timestamp) when the poll will be automatically closed
         * @var int
         */
        public ?int $close_date,
    ) {
    }
}
