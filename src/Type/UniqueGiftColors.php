<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class UniqueGiftColors extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Custom emoji identifier of the unique gift's model */
        public string $model_custom_emoji_id,
        /** @var  string  Custom emoji identifier of the unique gift's symbol */
        public string $symbol_custom_emoji_id,
        /** @var  int  Main color used in light themes; RGB format */
        public int $light_theme_main_color,
        /** @var  int[]  List of 1-3 additional colors used in light themes; RGB format */
        public array $light_theme_other_colors,
        /** @var  int  Main color used in dark themes; RGB format */
        public int $dark_theme_main_color,
        /** @var  int[]  List of 1-3 additional colors used in dark themes; RGB format */
        public array $dark_theme_other_colors,
    ) {
    }
}
