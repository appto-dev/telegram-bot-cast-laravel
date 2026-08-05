<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\BackgroundTypeCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChatBackground extends Data implements TelegramType
{
    public function __construct(
        /** @var  BackgroundType  Type of the background */
        #[WithCast(BackgroundTypeCast::class)]
        public BackgroundType $type,
    ) {
    }
}
