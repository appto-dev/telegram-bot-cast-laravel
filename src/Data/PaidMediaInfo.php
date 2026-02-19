<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\PaidMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Support\Resolvers\PaidMediaResolver;
use Spatie\LaravelData\Data;

/**
 * Describes the paid media added to a message.
 */
final class PaidMediaInfo extends Data implements TelegramBotData
{
    public function __construct(
        /** The number of Telegram Stars that must be paid to buy access to the media */
        public int $star_count,
        /**
         * Information about the paid media
         * @var array<PaidMedia>
         */
        public array $paid_media,
    ) {
    }

    public static function prepareForPipeline(array $properties): array
    {
        if (!isset($properties['paid_media']) || !$properties['paid_media']) {
            return $properties;
        }

        $properties['paid_media'] = (new PaidMediaResolver())->resolveCollection($properties['paid_media']);

        return $properties;
    }
}
