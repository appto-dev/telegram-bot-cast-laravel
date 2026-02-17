<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ChatMember;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents a <a href="https://core.telegram.org/bots/api#chatmember">chat member</a> that isn't currently a
 * member of the chat, but may join it themselves.
 */
final class ChatMemberLeft extends Data implements TelegramBotData, ChatMember
{
    public function __construct(
        /** The member's status in the chat, always "left" */
        public string $status,
        /** Information about the user */
        public User $user,
    ) {
    }
}
