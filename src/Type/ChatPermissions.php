<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @version Telegram Bot API 7.11
 */
final class ChatPermissions extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * True, if the user is allowed to send text messages, contacts, giveaways,
         * giveaway winners, invoices, locations and venues
         * @var bool
         */
        public ?bool $can_send_messages,
        /**
         * True, if the user is allowed to send audios
         * @var bool
         */
        public ?bool $can_send_audios,
        /**
         * True, if the user is allowed to send documents
         * @var bool
         */
        public ?bool $can_send_documents,
        /**
         * True, if the user is allowed to send photos
         * @var bool
         */
        public ?bool $can_send_photos,
        /**
         * True, if the user is allowed to send videos
         * @var bool
         */
        public ?bool $can_send_videos,
        /**
         * True, if the user is allowed to send video notes
         * @var bool
         */
        public ?bool $can_send_video_notes,
        /**
         * True, if the user is allowed to send voice notes
         * @var bool
         */
        public ?bool $can_send_voice_notes,
        /**
         * True, if the user is allowed to send polls
         * @var bool
         */
        public ?bool $can_send_polls,
        /**
         * True, if the user is allowed to send animations, games, stickers and use inline
         * bots
         * @var bool
         */
        public ?bool $can_send_other_messages,
        /**
         * True, if the user is allowed to add web page previews to their messages
         * @var bool
         */
        public ?bool $can_add_web_page_previews,
        /**
         * True, if the user is allowed to change the chat title, photo and other settings.
         * Ignored in public supergroups
         * @var bool
         */
        public ?bool $can_change_info,
        /**
         * True, if the user is allowed to invite new users to the chat
         * @var bool
         */
        public ?bool $can_invite_users,
        /**
         * True, if the user is allowed to pin messages. Ignored in public supergroups
         * @var bool
         */
        public ?bool $can_pin_messages,
        /**
         * True, if the user is allowed to create forum topics. If omitted defaults to the
         * value of can_pin_messages
         * @var bool
         */
        public ?bool $can_manage_topics,
    ) {
    }
}
