<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class PromoteChatMember extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target channel in the
         * format <code>@username</code>
         */
        public int|string $chat_id,
        /** @var  int  Unique identifier of the target user */
        public int $user_id,
        /** @var  bool|null  Pass <em>True</em> if the administrator's presence in the chat is hidden */
        public ?bool $is_anonymous,
        /**
         * @var  bool|null  Pass <em>True</em> if the administrator can access the chat event log, get boost
         * list, see hidden supergroup and channel members, report spam messages, ignore slow mode, and send
         * messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
         */
        public ?bool $can_manage_chat,
        /** @var  bool|null  Pass <em>True</em> if the administrator can delete messages of other users */
        public ?bool $can_delete_messages,
        /** @var  bool|null  Pass <em>True</em> if the administrator can manage video chats */
        public ?bool $can_manage_video_chats,
        /**
         * @var  bool|null  Pass <em>True</em> if the administrator can restrict, ban or unban chat members, or
         * access supergroup statistics. For backward compatibility, defaults to <em>True</em> for promotions
         * of channel administrators.
         */
        public ?bool $can_restrict_members,
        /**
         * @var  bool|null  Pass <em>True</em> if the administrator can add new administrators with a subset of
         * their own privileges or demote administrators that they have promoted, directly or indirectly
         * (promoted by administrators that were appointed by him)
         */
        public ?bool $can_promote_members,
        /**
         * @var  bool|null  Pass <em>True</em> if the administrator can change chat title, photo and other
         * settings
         */
        public ?bool $can_change_info,
        /** @var  bool|null  Pass <em>True</em> if the administrator can invite new users to the chat */
        public ?bool $can_invite_users,
        /** @var  bool|null  Pass <em>True</em> if the administrator can post stories to the chat */
        public ?bool $can_post_stories,
        /**
         * @var  bool|null  Pass <em>True</em> if the administrator can edit stories posted by other users,
         * post stories to the chat page, pin chat stories, and access the chat's story archive
         */
        public ?bool $can_edit_stories,
        /** @var  bool|null  Pass <em>True</em> if the administrator can delete stories posted by other users */
        public ?bool $can_delete_stories,
        /**
         * @var  bool|null  Pass <em>True</em> if the administrator can post messages in the channel, approve
         * suggested posts, or access channel statistics; for channels only
         */
        public ?bool $can_post_messages,
        /**
         * @var  bool|null  Pass <em>True</em> if the administrator can edit messages of other users and can
         * pin messages; for channels only
         */
        public ?bool $can_edit_messages,
        /** @var  bool|null  Pass <em>True</em> if the administrator can pin messages; for supergroups only */
        public ?bool $can_pin_messages,
        /**
         * @var  bool|null  Pass <em>True</em> if the user is allowed to create, rename, close, and reopen
         * forum topics; for supergroups only
         */
        public ?bool $can_manage_topics,
        /**
         * @var  bool|null  Pass <em>True</em> if the administrator can manage direct messages within the
         * channel and decline suggested posts; for channels only
         */
        public ?bool $can_manage_direct_messages,
        /**
         * @var  bool|null  Pass <em>True</em> if the administrator can edit the tags of regular members; for
         * groups and supergroups only
         */
        public ?bool $can_manage_tags,
    ) {
    }
}
