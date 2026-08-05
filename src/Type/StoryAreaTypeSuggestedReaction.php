<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\ReactionTypeCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class StoryAreaTypeSuggestedReaction extends Data implements TelegramType, StoryAreaType
{
    public function __construct(
        /** @var  string  Type of the area, always "suggested_reaction" */
        public string $type,
        /** @var  ReactionType  Type of the reaction */
        #[WithCast(ReactionTypeCast::class)]
        public ReactionType $reaction_type,
        /** @var  bool|null  Pass True if the reaction area has a dark background */
        public ?bool $is_dark,
        /** @var  bool|null  Pass True if reaction area corner is flipped */
        public ?bool $is_flipped,
    ) {
    }
}
