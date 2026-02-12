<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ReactionType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents a reaction added to a message along with the number of times it was
 * added.
 */
final class ReactionCount extends Data implements TelegramBotData
{
    public function __construct(
        /** Type of the reaction */
        public ReactionType $type,
        /** Number of times the reaction was added */
        public int $total_count,
    ) {
    }
}
