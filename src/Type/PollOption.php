<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class PollOption extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Unique identifier of the option, persistent on option addition and deletion */
        public string $persistent_id,
        /** @var  string  Option text, 1-100 characters */
        public string $text,
        /**
         * @var  MessageEntity[]|null  Special entities that appear in the option text. Currently, only custom
         * emoji entities are allowed in poll option texts
         */
        public ?array $text_entities,
        /** @var  PollMedia|null  Media added to the poll option */
        public ?PollMedia $media,
        /** @var  int  Number of users who voted for this option; may be 0 if unknown */
        public int $voter_count,
        /**
         * @var  User|null  User who added the option; omitted if the option wasn't added by a user after poll
         * creation
         */
        public ?User $added_by_user,
        /**
         * @var  Chat|null  Chat that added the option; omitted if the option wasn't added by a chat after poll
         * creation
         */
        public ?Chat $added_by_chat,
        /**
         * @var  int|null  Point in time (Unix timestamp) when the option was added; omitted if the option
         * existed in the original poll
         */
        public ?int $addition_date,
    ) {
    }
}
