<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\BackgroundType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Support\Resolvers\BackgroundTypeResolve;
use Spatie\LaravelData\Data;

/**
 * This object represents a chat background.
 */
final class ChatBackground extends Data implements TelegramBotData
{
    public function __construct(
        /** Type of the background */
        public BackgroundType $type,
    ) {
    }

    public static function prepareForPipeline(array $properties): array
    {
        if (!isset($properties['type']) || !$properties['type']) {
            return $properties;
        }

        $properties['type'] = (new BackgroundTypeResolve())->resolve($properties['type']);

        return $properties;
    }
}
