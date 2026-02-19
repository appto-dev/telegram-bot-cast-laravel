<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\OwnedGift;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Support\Resolvers\OwnedGiftResolver;
use Spatie\LaravelData\Data;

/**
 * Contains the list of gifts received and owned by a user or a chat.
 */
final class OwnedGifts extends Data implements TelegramBotData
{
    public function __construct(
        /** The total number of gifts owned by the user or the chat */
        public int $total_count,
        /**
         * The list of gifts
         * @var array<OwnedGift>
         */
        public array $gifts,
        /** Offset for the next request. If empty, then there are no more results */
        public ?string $next_offset,
    ) {
    }

    public static function prepareForPipeline(array $properties): array
    {
        if (!isset($properties['gifts']) || !$properties['gifts']) {
            return $properties;
        }

        $properties['gifts'] = (new OwnedGiftResolver())->resolveCollection($properties['gifts']);

        return $properties;
    }
}
