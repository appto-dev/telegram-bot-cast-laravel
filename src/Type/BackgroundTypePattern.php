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
class BackgroundTypePattern extends Data implements TelegramType, BackgroundType
{
    public function __construct(
        /** @var  string  Type of the background, always "pattern" */
        public string $type,
        /** @var  Document  Document with the pattern */
        public Document $document,
        /** @var  BackgroundFill  The background fill that is combined with the pattern */
        #[WithCast(BackgroundFillCast::class)]
        public BackgroundFill $fill,
        /** @var  int  Intensity of the pattern when it is shown above the filled background; 0-100 */
        public int $intensity,
        /**
         * @var  true|null  True, if the background fill must be applied only to the pattern itself. All other
         * pixels are black in this case. For dark themes only.
         */
        public ?true $is_inverted,
        /** @var  true|null  True, if the background moves slightly when the device is tilted */
        public ?true $is_moving,
    ) {
    }
}
