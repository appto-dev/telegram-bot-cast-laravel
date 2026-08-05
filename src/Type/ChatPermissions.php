<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChatPermissions extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  bool|null  True, if the user is allowed to send text messages, rich messages, contacts,
         * giveaways, giveaway winners, invoices, locations and venues
         */
        public ?bool $can_send_messages,
        /** @var  bool|null  True, if the user is allowed to send audios */
        public ?bool $can_send_audios,
        /** @var  bool|null  True, if the user is allowed to send documents */
        public ?bool $can_send_documents,
        /** @var  bool|null  True, if the user is allowed to send photos */
        public ?bool $can_send_photos,
        /** @var  bool|null  True, if the user is allowed to send videos */
        public ?bool $can_send_videos,
        /** @var  bool|null  True, if the user is allowed to send video notes */
        public ?bool $can_send_video_notes,
        /** @var  bool|null  True, if the user is allowed to send voice notes */
        public ?bool $can_send_voice_notes,
        /** @var  bool|null  True, if the user is allowed to send polls and checklists */
        public ?bool $can_send_polls,
        /**
         * @var  bool|null  True, if the user is allowed to send animations, games, stickers and use inline
         * bots
         */
        public ?bool $can_send_other_messages,
        /** @var  bool|null  True, if the user is allowed to add web page previews to their messages */
        public ?bool $can_add_web_page_previews,
        /**
         * @var  bool|null  True, if the user is allowed to react to messages. If omitted, defaults to the
         * value of can_send_messages.
         */
        public ?bool $can_react_to_messages,
        /**
         * @var  bool|null  True, if the user is allowed to edit their own tag. If omitted, defaults to the
         * value of can_pin_messages.
         */
        public ?bool $can_edit_tag,
        /**
         * @var  bool|null  True, if the user is allowed to change the chat title, photo and other settings.
         * Ignored in public supergroups.
         */
        public ?bool $can_change_info,
        /** @var  bool|null  True, if the user is allowed to invite new users to the chat */
        public ?bool $can_invite_users,
        /** @var  bool|null  True, if the user is allowed to pin messages. Ignored in public supergroups. */
        public ?bool $can_pin_messages,
        /**
         * @var  bool|null  True, if the user is allowed to create forum topics. If omitted, defaults to the
         * value of can_pin_messages.
         */
        public ?bool $can_manage_topics,
    ) {
    }
}
