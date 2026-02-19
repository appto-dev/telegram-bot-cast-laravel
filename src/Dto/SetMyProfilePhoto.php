<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\InputProfilePhoto;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Appto\TelegramBot\Support\Resolvers\InputProfilePhotoResolver;
use Spatie\LaravelData\Dto;

/**
 * Changes the profile photo of the bot. Returns <em>True</em> on success.
 */
final class SetMyProfilePhoto extends Dto implements TelegramBotDto
{
    public function __construct(
        /** The new profile photo to set */
        public InputProfilePhoto $photo,
    ) {
    }

    public static function prepareForPipeline(array $properties): array
    {
        if (!isset($properties['photo']) || !$properties['photo']) {
            return $properties;
        }

        $properties['photo'] = (new InputProfilePhotoResolver())->resolve($properties['photo']);

        return $properties;
    }
}
