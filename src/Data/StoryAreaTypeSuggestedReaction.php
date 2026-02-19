<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ReactionType;
use Appto\TelegramBot\Interfaces\StoryAreaType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Support\Resolvers\ReactionTypeResolve;
use Spatie\LaravelData\Data;

/**
 * Describes a story area pointing to a suggested reaction. Currently, a story can have up to 5 suggested reaction areas.
 */
final class StoryAreaTypeSuggestedReaction extends Data implements TelegramBotData, StoryAreaType
{
    public function __construct(
        /** Type of the area, always "suggested_reaction" */
        public string $type,
        /** Type of the reaction */
        public ReactionType $reaction_type,
        /** Pass True if the reaction area has a dark background */
        public ?bool $is_dark,
        /** Pass True if reaction area corner is flipped */
        public ?bool $is_flipped,
    ) {
    }

    public static function prepareForPipeline(array $properties): array
    {
        if (!isset($properties['reaction_type']) || !$properties['reaction_type']) {
            return $properties;
        }

        $properties['reaction_type'] = (new ReactionTypeResolve())
            ->resolveCollection($properties['reaction_type']);

        return $properties;
    }
}
