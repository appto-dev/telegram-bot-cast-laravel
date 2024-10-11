<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a reaction added to a message along with the number of times it was
 * added.
 *
 * @version Telegram Bot API 7.10
 */
final class ReactionCount extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the reaction
         * @var ReactionType
         */
        public ReactionType $type,
        /**
         * Number of times the reaction was added
         * @var int
         */
        public int $total_count,
    ) {
    }
}
