<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\BackgroundFillCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BackgroundTypeFill extends Data implements TelegramType, BackgroundType
{
    public function __construct(
        /** @var  string  Type of the background, always "fill" */
        public string $type,
        /** @var  BackgroundFill  The background fill */
        #[WithCast(BackgroundFillCast::class)]
        public BackgroundFill $fill,
        /** @var  int  Dimming of the background in dark themes, as a percentage; 0-100 */
        public int $dark_theme_dimming,
    ) {
    }
}
