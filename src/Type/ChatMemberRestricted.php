<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChatMemberRestricted extends Data implements TelegramType, ChatMember
{
    public function __construct(
        /** @var  string  The member's status in the chat, always "restricted" */
        public string $status,
        /** @var  string|null  Tag of the member */
        public ?string $tag,
        /** @var  User  Information about the user */
        public User $user,
        /** @var  bool  True, if the user is a member of the chat at the moment of the request */
        public bool $is_member,
        /**
         * @var  bool  True, if the user is allowed to send text messages, rich messages, contacts, giveaways,
         * giveaway winners, invoices, locations and venues
         */
        public bool $can_send_messages,
        /** @var  bool  True, if the user is allowed to send audios */
        public bool $can_send_audios,
        /** @var  bool  True, if the user is allowed to send documents */
        public bool $can_send_documents,
        /** @var  bool  True, if the user is allowed to send photos */
        public bool $can_send_photos,
        /** @var  bool  True, if the user is allowed to send videos */
        public bool $can_send_videos,
        /** @var  bool  True, if the user is allowed to send video notes */
        public bool $can_send_video_notes,
        /** @var  bool  True, if the user is allowed to send voice notes */
        public bool $can_send_voice_notes,
        /** @var  bool  True, if the user is allowed to send polls and checklists */
        public bool $can_send_polls,
        /** @var  bool  True, if the user is allowed to send animations, games, stickers and use inline bots */
        public bool $can_send_other_messages,
        /** @var  bool  True, if the user is allowed to add web page previews to their messages */
        public bool $can_add_web_page_previews,
        /** @var  bool  True, if the user is allowed to react to messages */
        public bool $can_react_to_messages,
        /** @var  bool  True, if the user is allowed to edit their own tag */
        public bool $can_edit_tag,
        /** @var  bool  True, if the user is allowed to change the chat title, photo and other settings */
        public bool $can_change_info,
        /** @var  bool  True, if the user is allowed to invite new users to the chat */
        public bool $can_invite_users,
        /** @var  bool  True, if the user is allowed to pin messages */
        public bool $can_pin_messages,
        /** @var  bool  True, if the user is allowed to create forum topics */
        public bool $can_manage_topics,
        /**
         * @var  int  Date when restrictions will be lifted for this user; Unix time. If 0, then the user is
         * restricted forever.
         */
        public int $until_date,
    ) {
    }
}
