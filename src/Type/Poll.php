<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * Poll
 *
 * This object contains information about a poll.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class Poll extends Dto implements TypeInterface
{
    public function __construct(
        /** Unique poll identifier */
        public string $id,
        /** Poll question, 1-300 characters */
        public string $question,
        /**
         * List of poll options
         * @var array<PollOption>
         */
        public array $options,
        /** Total number of users that voted in the poll */
        public int $total_voter_count,
        /** True, if the poll is closed */
        public bool $is_closed,
        /** True, if the poll is anonymous */
        public bool $is_anonymous,
        /** Poll type, currently can be "regular" or "quiz" */
        public string $type,
        /** True, if the poll allows multiple answers */
        public bool $allows_multiple_answers,
        /**
         * 0-based identifier of the correct answer option. Available only for
         * polls in the quiz mode, which are closed, or was sent (not forwarded)
         * by the bot or to the private chat with the bot.
         */
        public ?int $correct_option_id,
        /**
         * Text that is shown when a user chooses an incorrect answer or taps on
         * the lamp icon in a quiz-style poll, 0-200 characters
         */
        public ?string $explanation,
        /**
         * Special entities like usernames, URLs, bot commands, etc. that appear
         * in the explanation
         * @var array<MessageEntity>
         */
        public ?array $explanation_entities,
        /** Amount of time in seconds the poll will be active after creation */
        public ?int $open_period,
        /**
         * Point in time (Unix timestamp) when the poll will be automatically
         * closed
         */
        public ?int $close_date,
    ) {
    }
}