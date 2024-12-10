<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a <a href="#chatmember">chat member</a> that is under certain
 * restrictions in the chat. Supergroups only.
 */
final class ChatMemberRestricted extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The member's status in the chat, always "restricted"
         * @var string
         */
        public string $status,
        /**
         * Information about the user
         * @var User
         */
        public User $user,
        /**
         * True, if the user is a member of the chat at the moment of the request
         * @var bool
         */
        public bool $is_member,
        /**
         * True, if the user is allowed to send text messages, contacts, giveaways,
         * giveaway winners, invoices, locations and venues
         * @var bool
         */
        public bool $can_send_messages,
        /**
         * True, if the user is allowed to send audios
         * @var bool
         */
        public bool $can_send_audios,
        /**
         * True, if the user is allowed to send documents
         * @var bool
         */
        public bool $can_send_documents,
        /**
         * True, if the user is allowed to send photos
         * @var bool
         */
        public bool $can_send_photos,
        /**
         * True, if the user is allowed to send videos
         * @var bool
         */
        public bool $can_send_videos,
        /**
         * True, if the user is allowed to send video notes
         * @var bool
         */
        public bool $can_send_video_notes,
        /**
         * True, if the user is allowed to send voice notes
         * @var bool
         */
        public bool $can_send_voice_notes,
        /**
         * True, if the user is allowed to send polls
         * @var bool
         */
        public bool $can_send_polls,
        /**
         * True, if the user is allowed to send animations, games, stickers and use inline
         * bots
         * @var bool
         */
        public bool $can_send_other_messages,
        /**
         * True, if the user is allowed to add web page previews to their messages
         * @var bool
         */
        public bool $can_add_web_page_previews,
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
         * True, if the user is allowed to pin messages
         * @var bool
         */
        public bool $can_pin_messages,
        /**
         * True, if the user is allowed to create forum topics
         * @var bool
         */
        public bool $can_manage_topics,
        /**
         * Date when restrictions will be lifted for this user; Unix time. If 0, then the
         * user is restricted forever
         * @var int
         */
        public int $until_date,
    ) {
    }
}
