<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ChatBoostSource;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Support\Resolvers\ChatBoostSourceResolve;
use Spatie\LaravelData\Data;

/**
 * This object represents a boost removed from a chat.
 */
final class ChatBoostRemoved extends Data implements TelegramBotData
{
    public function __construct(
        /** Chat which was boosted */
        public Chat $chat,
        /** Unique identifier of the boost */
        public string $boost_id,
        /** Point in time (Unix timestamp) when the boost was removed */
        public int $remove_date,
        /** Source of the removed boost */
        public ChatBoostSource $source,
    ) {
    }

    public static function prepareForPipeline(array $properties): array
    {
        if (!isset($properties['source']) || !$properties['source']) {
            return $properties;
        }

        $properties['source'] = (new ChatBoostSourceResolve())->resolve($properties['source']);

        return $properties;
    }
}
