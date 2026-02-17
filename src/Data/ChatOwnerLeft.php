<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about the chat owner leaving the chat.
 */
final class ChatOwnerLeft extends Data implements TelegramBotData
{
    public function __construct(
        /** The user which will be the new owner of the chat if the previous owner does not return to the chat */
        public ?User $new_owner,
    ) {
    }
}
