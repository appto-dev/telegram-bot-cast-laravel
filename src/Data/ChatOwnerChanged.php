<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about an ownership change in the chat.
 */
final class ChatOwnerChanged extends Data implements TelegramBotData
{
    public function __construct(
        /** The new owner of the chat */
        public User $new_owner,
    ) {
    }
}
