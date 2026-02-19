<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ReactionType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Support\Resolvers\ReactionTypeResolve;
use Spatie\LaravelData\Data;

/**
 * Represents a reaction added to a message along with the number of times it was added.
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

    public static function prepareForPipeline(array $properties): array
    {
        if (!isset($properties['type']) || !$properties['type']) {
            return $properties;
        }

        $properties['type'] = (new ReactionTypeResolve())->resolve($properties['type']);

        return $properties;
    }
}
