<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\BackgroundFill;
use Appto\TelegramBot\Interfaces\BackgroundType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Support\Resolvers\BackgroundFillResolve;
use Spatie\LaravelData\Data;

/**
 * The background is automatically filled based on the selected colors.
 */
final class BackgroundTypeFill extends Data implements TelegramBotData, BackgroundType
{
    public function __construct(
        /** Type of the background, always "fill" */
        public string $type,
        /** The background fill */
        public BackgroundFill $fill,
        /** Dimming of the background in dark themes, as a percentage; 0-100 */
        public int $dark_theme_dimming,
    ) {
    }

    public static function prepareForPipeline(array $properties): array
    {
        if (!isset($properties['fill']) || !$properties['fill']) {
            return $properties;
        }

        $properties['fill'] = (new BackgroundFillResolve())->resolve($properties['fill']);

        return $properties;
    }
}
