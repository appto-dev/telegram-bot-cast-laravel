<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ChatMember;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents a <a href="https://core.telegram.org/bots/api#chatmember">chat member</a> that was banned in the
 * chat and can't return to the chat or view chat messages.
 */
final class ChatMemberBanned extends Data implements TelegramBotData, ChatMember
{
    public function __construct(
        /** The member's status in the chat, always "kicked" */
        public string $status,
        /** Information about the user */
        public User $user,
        /** Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever */
        public int $until_date,
    ) {
    }
}
