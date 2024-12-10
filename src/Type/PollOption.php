<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object contains information about one answer option in a poll.
 */
final class PollOption extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Option text, 1-100 characters
         * @var string
         */
        public string $text,
        /**
         * Special entities that appear in the option text. Currently, only custom emoji
         * entities are allowed in poll option texts
         * @var MessageEntity[]
         */
        public ?array $text_entities,
        /**
         * Number of users that voted for this option
         * @var int
         */
        public int $voter_count,
    ) {
    }
}
