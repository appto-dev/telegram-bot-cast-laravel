<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ReactionType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The reaction is based on an emoji.
 */
final class ReactionTypeEmoji extends Data implements TelegramBotData, ReactionType
{
    public function __construct(
        /** Type of the reaction, always "emoji" */
        public string $type,
        /**
         * Reaction emoji. Currently, it can be one of "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", ""
         */
        public string $emoji,
    ) {
    }
}
