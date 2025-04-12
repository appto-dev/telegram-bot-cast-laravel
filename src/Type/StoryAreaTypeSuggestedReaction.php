<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a story area pointing to a suggested reaction. Currently, a story can
 * have up to 5 suggested reaction areas.
 */
final class StoryAreaTypeSuggestedReaction extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the area, always "suggested_reaction"
         * @var string
         */
        public string $type,
        /**
         * Type of the reaction
         * @var ReactionType
         */
        public ReactionType $reaction_type,
        /**
         * Pass True if the reaction area has a dark background
         * @var bool
         */
        public ?bool $is_dark,
        /**
         * Pass True if reaction area corner is flipped
         * @var bool
         */
        public ?bool $is_flipped,
    ) {
    }
}
