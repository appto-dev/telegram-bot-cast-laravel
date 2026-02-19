<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ChatMember;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents a <a href="https://core.telegram.org/bots/api#chatmember">chat member</a> that has no additional privileges
 * or restrictions.
 */
final class ChatMemberMember extends Data implements TelegramBotData, ChatMember
{
    public function __construct(
        /** The member's status in the chat, always "member" */
        public string $status,
        /** Information about the user */
        public User $user,
        /** Date when the user's subscription will expire; Unix time */
        public ?int $until_date,
    ) {
    }
}
