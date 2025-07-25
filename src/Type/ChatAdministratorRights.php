<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents the rights of an administrator in a chat.
 */
final class ChatAdministratorRights extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * True, if the user's presence in the chat is hidden
         * @var bool
         */
        public bool $is_anonymous,
        /**
         * True, if the administrator can access the chat event log, get boost list, see
         * hidden supergroup and channel members, report spam messages, ignore slow mode,
         * and send messages to the chat without paying Telegram Stars. Implied by any
         * other administrator privilege.
         * @var bool
         */
        public bool $can_manage_chat,
        /**
         * True, if the administrator can delete messages of other users
         * @var bool
         */
        public bool $can_delete_messages,
        /**
         * True, if the administrator can manage video chats
         * @var bool
         */
        public bool $can_manage_video_chats,
        /**
         * True, if the administrator can restrict, ban or unban chat members, or access
         * supergroup statistics
         * @var bool
         */
        public bool $can_restrict_members,
        /**
         * True, if the administrator can add new administrators with a subset of their own
         * privileges or demote administrators that they have promoted, directly or
         * indirectly (promoted by administrators that were appointed by the user)
         * @var bool
         */
        public bool $can_promote_members,
        /**
         * True, if the user is allowed to change the chat title, photo and other settings
         * @var bool
         */
        public bool $can_change_info,
        /**
         * True, if the user is allowed to invite new users to the chat
         * @var bool
         */
        public bool $can_invite_users,
        /**
         * True, if the administrator can post stories to the chat
         * @var bool
         */
        public bool $can_post_stories,
        /**
         * True, if the administrator can edit stories posted by other users, post stories
         * to the chat page, pin chat stories, and access the chat's story archive
         * @var bool
         */
        public bool $can_edit_stories,
        /**
         * True, if the administrator can delete stories posted by other users
         * @var bool
         */
        public bool $can_delete_stories,
        /**
         * True, if the administrator can post messages in the channel, approve suggested
         * posts, or access channel statistics; for channels only
         * @var bool
         */
        public ?bool $can_post_messages,
        /**
         * True, if the administrator can edit messages of other users and can pin
         * messages; for channels only
         * @var bool
         */
        public ?bool $can_edit_messages,
        /**
         * True, if the user is allowed to pin messages; for groups and supergroups only
         * @var bool
         */
        public ?bool $can_pin_messages,
        /**
         * True, if the user is allowed to create, rename, close, and reopen forum topics;
         * for supergroups only
         * @var bool
         */
        public ?bool $can_manage_topics,
    ) {
    }
}
