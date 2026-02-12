<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\MessageOrigin;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The message was originally sent by an unknown user.
 */
final class MessageOriginHiddenUser extends Data implements TelegramBotData, MessageOrigin
{
    public function __construct(
        /** Type of the message origin, always "hidden_user" */
        public string $type,
        /** Date the message was sent originally in Unix time */
        public int $date,
        /** Name of the user that sent the message originally */
        public string $sender_user_name,
    ) {
    }
}
