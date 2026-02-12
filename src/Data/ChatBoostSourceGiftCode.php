<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ChatBoostSource;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The boost was obtained by the creation of Telegram Premium gift codes to boost a
 * chat. Each such code boosts the chat 4 times for the duration of the
 * corresponding Telegram Premium subscription.
 */
final class ChatBoostSourceGiftCode extends Data implements TelegramBotData, ChatBoostSource
{
    public function __construct(
        /** Source of the boost, always "gift_code" */
        public string $source,
        /** User for which the gift code was created */
        public User $user,
    ) {
    }
}
