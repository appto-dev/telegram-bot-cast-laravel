<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about a user boosting a chat.
 */
final class ChatBoostAdded extends Data implements TelegramBotData
{
    public function __construct(
        /** Number of boosts added by the user */
        public int $boost_count,
    ) {
    }
}
