<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\ChatMemberCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChatMemberUpdated extends Data implements TelegramType
{
    public function __construct(
        /** @var  Chat  Chat the user belongs to */
        public Chat $chat,
        /** @var  User  Performer of the action, which resulted in the change */
        public User $from,
        /** @var  int  Date the change was done in Unix time */
        public int $date,
        /** @var  ChatMember  Previous information about the chat member */
        #[WithCast(ChatMemberCast::class)]
        public ChatMember $old_chat_member,
        /** @var  ChatMember  New information about the chat member */
        #[WithCast(ChatMemberCast::class)]
        public ChatMember $new_chat_member,
        /**
         * @var  ChatInviteLink|null  Chat invite link, which was used by the user to join the chat; for
         * joining by invite link events only
         */
        public ?ChatInviteLink $invite_link,
        /**
         * @var  bool|null  True, if the user joined the chat after sending a direct join request without using
         * an invite link and being approved by an administrator
         */
        public ?bool $via_join_request,
        /** @var  bool|null  True, if the user joined the chat via a chat folder invite link */
        public ?bool $via_chat_folder_invite_link,
    ) {
    }
}
