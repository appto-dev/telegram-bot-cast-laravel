<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents the rights of a business bot.
 */
final class BusinessBotRights extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24
         * hours
         */
        public ?true $can_reply,
        /** True, if the bot can mark incoming private messages as read */
        public ?true $can_read_messages,
        /** True, if the bot can delete messages sent by the bot */
        public ?true $can_delete_sent_messages,
        /** True, if the bot can delete all private messages in managed chats */
        public ?true $can_delete_all_messages,
        /** True, if the bot can edit the first and last name of the business account */
        public ?true $can_edit_name,
        /** True, if the bot can edit the bio of the business account */
        public ?true $can_edit_bio,
        /** True, if the bot can edit the profile photo of the business account */
        public ?true $can_edit_profile_photo,
        /** True, if the bot can edit the username of the business account */
        public ?true $can_edit_username,
        /** True, if the bot can change the privacy settings pertaining to gifts for the business account */
        public ?true $can_change_gift_settings,
        /** True, if the bot can view gifts and the amount of Telegram Stars owned by the business account */
        public ?true $can_view_gifts_and_stars,
        /** True, if the bot can convert regular gifts owned by the business account to Telegram Stars */
        public ?true $can_convert_gifts_to_stars,
        /** True, if the bot can transfer and upgrade gifts owned by the business account */
        public ?true $can_transfer_and_upgrade_gifts,
        /**
         * True, if the bot can transfer Telegram Stars received by the business account to its own account, or use them
         * to upgrade and transfer gifts
         */
        public ?true $can_transfer_stars,
        /** True, if the bot can post, edit and delete stories on behalf of the business account */
        public ?true $can_manage_stories,
    ) {
    }
}
