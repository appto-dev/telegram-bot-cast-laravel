<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ReactionType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The reaction is based on a custom emoji.
 */
final class ReactionTypeCustomEmoji extends Data implements TelegramBotData, ReactionType
{
    public function __construct(
        /** Type of the reaction, always "custom_emoji" */
        public string $type,
        /** Custom emoji identifier */
        public string $custom_emoji_id,
    ) {
    }
}
