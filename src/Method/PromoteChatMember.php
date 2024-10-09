<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to promote or demote a user in a supergroup or a channel. The
 * bot must be an administrator in the chat for this to work and must have the
 * appropriate administrator rights. Pass <em>False</em> for all boolean parameters
 * to demote a user. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class PromoteChatMember extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format @channelusername)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier of the target user
         * @var int
         */
        public int $user_id,
        /**
         * Pass True if the administrator's presence in the chat is hidden
         * @var bool|null
         */
        public ?bool $is_anonymous,
        /**
         * Pass True if the administrator can access the chat event log, get boost list,
         * see hidden supergroup and channel members, report spam messages and ignore slow
         * mode. Implied by any other administrator privilege.
         * @var bool|null
         */
        public ?bool $can_manage_chat,
        /**
         * Pass True if the administrator can delete messages of other users
         * @var bool|null
         */
        public ?bool $can_delete_messages,
        /**
         * Pass True if the administrator can manage video chats
         * @var bool|null
         */
        public ?bool $can_manage_video_chats,
        /**
         * Pass True if the administrator can restrict, ban or unban chat members, or
         * access supergroup statistics
         * @var bool|null
         */
        public ?bool $can_restrict_members,
        /**
         * Pass True if the administrator can add new administrators with a subset of their
         * own privileges or demote administrators that they have promoted, directly or
         * indirectly (promoted by administrators that were appointed by him)
         * @var bool|null
         */
        public ?bool $can_promote_members,
        /**
         * Pass True if the administrator can change chat title, photo and other settings
         * @var bool|null
         */
        public ?bool $can_change_info,
        /**
         * Pass True if the administrator can invite new users to the chat
         * @var bool|null
         */
        public ?bool $can_invite_users,
        /**
         * Pass True if the administrator can post stories to the chat
         * @var bool|null
         */
        public ?bool $can_post_stories,
        /**
         * Pass True if the administrator can edit stories posted by other users, post
         * stories to the chat page, pin chat stories, and access the chat's story archive
         * @var bool|null
         */
        public ?bool $can_edit_stories,
        /**
         * Pass True if the administrator can delete stories posted by other users
         * @var bool|null
         */
        public ?bool $can_delete_stories,
        /**
         * Pass True if the administrator can post messages in the channel, or access
         * channel statistics; for channels only
         * @var bool|null
         */
        public ?bool $can_post_messages,
        /**
         * Pass True if the administrator can edit messages of other users and can pin
         * messages; for channels only
         * @var bool|null
         */
        public ?bool $can_edit_messages,
        /**
         * Pass True if the administrator can pin messages; for supergroups only
         * @var bool|null
         */
        public ?bool $can_pin_messages,
        /**
         * Pass True if the user is allowed to create, rename, close, and reopen forum
         * topics; for supergroups only
         * @var bool|null
         */
        public ?bool $can_manage_topics,
    ) {
    }
}
