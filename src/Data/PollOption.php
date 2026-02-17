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
        /** Option text, 1-100 characters */
        public string $text,
        /**
         * Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll
         * option texts
         */
        public ?MessageEntity $text_entities,
        /** Number of users that voted for this option */
        public int $voter_count,
    ) {
    }
}
