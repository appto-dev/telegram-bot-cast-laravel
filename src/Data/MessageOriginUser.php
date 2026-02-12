<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\MessageOrigin;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The message was originally sent by a known user.
 */
final class MessageOriginUser extends Data implements TelegramBotData, MessageOrigin
{
    public function __construct(
        /** Type of the message origin, always "user" */
        public string $type,
        /** Date the message was sent originally in Unix time */
        public int $date,
        /** User that sent the message originally */
        public User $sender_user,
    ) {
    }
}
