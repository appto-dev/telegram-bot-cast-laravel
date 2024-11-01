<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents changes in the status of a chat member.
 *
 * @version Telegram Bot API 7.11
 */
final class ChatMemberUpdated extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Chat the user belongs to
         * @var Chat
         */
        public Chat $chat,
        /**
         * Performer of the action, which resulted in the change
         * @var User
         */
        public User $from,
        /**
         * Date the change was done in Unix time
         * @var int
         */
        public int $date,
        /**
         * Previous information about the chat member
         * @var ChatMember
         */
        public ChatMember $old_chat_member,
        /**
         * New information about the chat member
         * @var ChatMember
         */
        public ChatMember $new_chat_member,
        /**
         * Chat invite link, which was used by the user to join the chat; for joining by
         * invite link events only.
         * @var ChatInviteLink
         */
        public ?ChatInviteLink $invite_link,
        /**
         * True, if the user joined the chat after sending a direct join request without
         * using an invite link and being approved by an administrator
         * @var bool
         */
        public ?bool $via_join_request,
        /**
         * True, if the user joined the chat via a chat folder invite link
         * @var bool
         */
        public ?bool $via_chat_folder_invite_link,
    ) {
    }
}
