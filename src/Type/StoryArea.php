<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\StoryAreaTypeCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class StoryArea extends Data implements TelegramType
{
    public function __construct(
        /** @var  StoryAreaPosition  Position of the area */
        public StoryAreaPosition $position,
        /** @var  StoryAreaType  Type of the area */
        #[WithCast(StoryAreaTypeCast::class)]
        public StoryAreaType $type,
    ) {
    }
}
