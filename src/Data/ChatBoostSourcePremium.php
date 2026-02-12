<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ChatBoostSource;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The boost was obtained by subscribing to Telegram Premium or by gifting a
 * Telegram Premium subscription to another user.
 */
final class ChatBoostSourcePremium extends Data implements TelegramBotData, ChatBoostSource
{
    public function __construct(
        /** Source of the boost, always "premium" */
        public string $source,
        /** User that boosted the chat */
        public User $user,
    ) {
    }
}
