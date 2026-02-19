<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ChatMember;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents a <a href="https://core.telegram.org/bots/api#chatmember">chat member</a> that owns the chat and has all
 * administrator privileges.
 */
final class ChatMemberOwner extends Data implements TelegramBotData, ChatMember
{
    public function __construct(
        /** The member's status in the chat, always "creator" */
        public string $status,
        /** Information about the user */
        public User $user,
        /** True, if the user's presence in the chat is hidden */
        public bool $is_anonymous,
        /** Custom title for this user */
        public ?string $custom_title,
    ) {
    }
}
