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
class ReactionCount extends Data implements TelegramType
{
    public function __construct(
        /** @var  ReactionType  Type of the reaction */
        #[WithCast(ReactionTypeCast::class)]
        public ReactionType $type,
        /** @var  int  Number of times the reaction was added */
        public int $total_count,
    ) {
    }
}
