<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object contains information about one answer option in a poll.
 */
final class PollOption extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique identifier of the option, persistent on option addition and deletion */
        public string $persistent_id,
        /** Option text, 1-100 characters */
        public string $text,
        /**
         * Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll
         * option texts
         * @var array<MessageEntity>
         */
        public ?array $text_entities,
        /** Number of users who voted for this option; may be 0 if unknown */
        public int $voter_count,
        /** User who added the option; omitted if the option wasn't added by a user after poll creation */
        public ?User $added_by_user,
        /** Chat that added the option; omitted if the option wasn't added by a chat after poll creation */
        public ?Chat $added_by_chat,
        /** Point in time (Unix timestamp) when the option was added; omitted if the option existed in the original poll */
        public ?int $addition_date,
    ) {
    }
}
