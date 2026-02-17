<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ChatMember;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents changes in the status of a chat member.
 */
final class ChatMemberUpdated extends Data implements TelegramBotData
{
    public function __construct(
        /** Chat the user belongs to */
        public Chat $chat,
        /** Performer of the action, which resulted in the change */
        public User $from,
        /** Date the change was done in Unix time */
        public int $date,
        /** Previous information about the chat member */
        public ChatMember $old_chat_member,
        /** New information about the chat member */
        public ChatMember $new_chat_member,
        /** Chat invite link, which was used by the user to join the chat; for joining by invite link events only. */
        public ?ChatInviteLink $invite_link,
        /**
         * True, if the user joined the chat after sending a direct join request without using an invite link and being
         * approved by an administrator
         */
        public ?bool $via_join_request,
        /** True, if the user joined the chat via a chat folder invite link */
        public ?bool $via_chat_folder_invite_link,
    ) {
    }
}
