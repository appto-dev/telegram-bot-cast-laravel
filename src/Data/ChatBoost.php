<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ChatBoostSource;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Support\Resolvers\ChatBoostSourceResolve;
use Spatie\LaravelData\Data;

/**
 * This object contains information about a chat boost.
 */
final class ChatBoost extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique identifier of the boost */
        public string $boost_id,
        /** Point in time (Unix timestamp) when the chat was boosted */
        public int $add_date,
        /**
         * Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium
         * subscription is prolonged
         */
        public int $expiration_date,
        /** Source of the added boost */
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
