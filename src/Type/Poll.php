<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class Poll extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Unique poll identifier */
        public string $id,
        /** @var  string  Poll question, 1-300 characters */
        public string $question,
        /**
         * @var  MessageEntity[]|null  Special entities that appear in the question. Currently, only custom
         * emoji entities are allowed in poll questions
         */
        public ?array $question_entities,
        /** @var  PollOption[]  List of poll options */
        public array $options,
        /** @var  int  Total number of users that voted in the poll */
        public int $total_voter_count,
        /** @var  bool  True, if the poll is closed */
        public bool $is_closed,
        /** @var  bool  True, if the poll is anonymous */
        public bool $is_anonymous,
        /** @var  string  Poll type, currently can be "regular" or "quiz" */
        public string $type,
        /** @var  bool  True, if the poll allows multiple answers */
        public bool $allows_multiple_answers,
        /** @var  bool  True, if the poll allows to change the chosen answer options */
        public bool $allows_revoting,
        /**
         * @var  bool  True if voting is limited to users who have been members of the chat where the poll was
         * originally sent for more than 24 hours
         */
        public bool $members_only,
        /**
         * @var  string[]|null  A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries
         * from which users can vote in the poll. The country code "FT" is used for users with anonymous
         * numbers. If omitted, then users from any country can participate in the poll.
         */
        public ?array $country_codes,
        /**
         * @var  int[]|null  Array of 0-based identifiers of the correct answer options. Available only for
         * polls in quiz mode which are closed or were sent (not forwarded) by the bot or to the private chat
         * with the bot.
         */
        public ?array $correct_option_ids,
        /**
         * @var  string|null  Text that is shown when a user chooses an incorrect answer or taps on the lamp
         * icon in a quiz-style poll, 0-200 characters
         */
        public ?string $explanation,
        /**
         * @var  MessageEntity[]|null  Special entities like usernames, URLs, bot commands, etc. that appear in
         * the explanation
         */
        public ?array $explanation_entities,
        /** @var  PollMedia|null  Media added to the quiz explanation */
        public ?PollMedia $explanation_media,
        /** @var  int|null  Amount of time in seconds the poll will be active after creation */
        public ?int $open_period,
        /** @var  int|null  Point in time (Unix timestamp) when the poll will be automatically closed */
        public ?int $close_date,
        /** @var  string|null  Description of the poll; for polls inside the Message object only */
        public ?string $description,
        /**
         * @var  MessageEntity[]|null  Special entities like usernames, URLs, bot commands, etc. that appear in
         * the description
         */
        public ?array $description_entities,
        /** @var  PollMedia|null  Media added to the poll description; for polls inside the Message object only */
        public ?PollMedia $media,
    ) {
    }
}
