<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in
 * the chat for this to work and must have the appropriate administrator rights. Pass <em>False</em> for all
 * boolean parameters to demote a user. Returns <em>True</em> on success.
 */
final class PromoteChatMember extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format
         * <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /** Unique identifier of the target user */
        public int $user_id,
        /** Pass <em>True</em> if the administrator's presence in the chat is hidden */
        public ?bool $is_anonymous,
        /**
         * Pass <em>True</em> if the administrator can access the chat event log, get boost list, see hidden supergroup
         * and channel members, report spam messages, ignore slow mode, and send messages to the chat without paying
         * Telegram Stars. Implied by any other administrator privilege.
         */
        public ?bool $can_manage_chat,
        /** Pass <em>True</em> if the administrator can delete messages of other users */
        public ?bool $can_delete_messages,
        /** Pass <em>True</em> if the administrator can manage video chats */
        public ?bool $can_manage_video_chats,
        /**
         * Pass <em>True</em> if the administrator can restrict, ban or unban chat members, or access supergroup
         * statistics. For backward compatibility, defaults to <em>True</em> for promotions of channel administrators
         */
        public ?bool $can_restrict_members,
        /**
         * Pass <em>True</em> if the administrator can add new administrators with a subset of their own privileges or
         * demote administrators that they have promoted, directly or indirectly (promoted by administrators that were
         * appointed by him)
         */
        public ?bool $can_promote_members,
        /** Pass <em>True</em> if the administrator can change chat title, photo and other settings */
        public ?bool $can_change_info,
        /** Pass <em>True</em> if the administrator can invite new users to the chat */
        public ?bool $can_invite_users,
        /** Pass <em>True</em> if the administrator can post stories to the chat */
        public ?bool $can_post_stories,
        /**
         * Pass <em>True</em> if the administrator can edit stories posted by other users, post stories to the chat page,
         * pin chat stories, and access the chat's story archive
         */
        public ?bool $can_edit_stories,
        /** Pass <em>True</em> if the administrator can delete stories posted by other users */
        public ?bool $can_delete_stories,
        /**
         * Pass <em>True</em> if the administrator can post messages in the channel, approve suggested posts, or access
         * channel statistics; for channels only
         */
        public ?bool $can_post_messages,
        /**
         * Pass <em>True</em> if the administrator can edit messages of other users and can pin messages; for channels
         * only
         */
        public ?bool $can_edit_messages,
        /** Pass <em>True</em> if the administrator can pin messages; for supergroups only */
        public ?bool $can_pin_messages,
        /**
         * Pass <em>True</em> if the user is allowed to create, rename, close, and reopen forum topics; for supergroups
         * only
         */
        public ?bool $can_manage_topics,
        /**
         * Pass <em>True</em> if the administrator can manage direct messages within the channel and decline suggested
         * posts; for channels only
         */
        public ?bool $can_manage_direct_messages,
    ) {
    }
}
