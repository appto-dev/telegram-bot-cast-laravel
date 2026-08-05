<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BusinessBotRights extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  true|null  True, if the bot can send and edit messages in the private chats that had incoming
         * messages in the last 24 hours
         */
        public ?true $can_reply,
        /** @var  true|null  True, if the bot can mark incoming private messages as read */
        public ?true $can_read_messages,
        /** @var  true|null  True, if the bot can delete messages sent by the bot */
        public ?true $can_delete_sent_messages,
        /** @var  true|null  True, if the bot can delete all private messages in managed chats */
        public ?true $can_delete_all_messages,
        /** @var  true|null  True, if the bot can edit the first and last name of the business account */
        public ?true $can_edit_name,
        /** @var  true|null  True, if the bot can edit the bio of the business account */
        public ?true $can_edit_bio,
        /** @var  true|null  True, if the bot can edit the profile photo of the business account */
        public ?true $can_edit_profile_photo,
        /** @var  true|null  True, if the bot can edit the username of the business account */
        public ?true $can_edit_username,
        /**
         * @var  true|null  True, if the bot can change the privacy settings pertaining to gifts for the
         * business account
         */
        public ?true $can_change_gift_settings,
        /**
         * @var  true|null  True, if the bot can view gifts and the amount of Telegram Stars owned by the
         * business account
         */
        public ?true $can_view_gifts_and_stars,
        /**
         * @var  true|null  True, if the bot can convert regular gifts owned by the business account to
         * Telegram Stars
         */
        public ?true $can_convert_gifts_to_stars,
        /** @var  true|null  True, if the bot can transfer and upgrade gifts owned by the business account */
        public ?true $can_transfer_and_upgrade_gifts,
        /**
         * @var  true|null  True, if the bot can transfer Telegram Stars received by the business account to
         * its own account, or use them to upgrade and transfer gifts
         */
        public ?true $can_transfer_stars,
        /**
         * @var  true|null  True, if the bot can post, edit and delete stories on behalf of the business
         * account
         */
        public ?true $can_manage_stories,
    ) {
    }
}
