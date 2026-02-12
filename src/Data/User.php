<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a Telegram user or bot.
 */
final class User extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier for this user or bot. This number may have more than 32
         * significant bits and some programming languages may have difficulty/silent
         * defects in interpreting it. But it has at most 52 significant bits, so a 64-bit
         * integer or double-precision float type are safe for storing this identifier.
         */
        public int $id,
        /** True, if this user is a bot */
        public bool $is_bot,
        /** User's or bot's first name */
        public string $first_name,
        /** User's or bot's last name */
        public ?string $last_name,
        /** User's or bot's username */
        public ?string $username,
        /** IETF language tag of the user's language */
        public ?string $language_code,
        /** True, if this user is a Telegram Premium user */
        public ?true $is_premium,
        /** True, if this user added the bot to the attachment menu */
        public ?true $added_to_attachment_menu,
        /** True, if the bot can be invited to groups. Returned only in getMe. */
        public ?bool $can_join_groups,
        /** True, if privacy mode is disabled for the bot. Returned only in getMe. */
        public ?bool $can_read_all_group_messages,
        /** True, if the bot supports inline queries. Returned only in getMe. */
        public ?bool $supports_inline_queries,
        /**
         * True, if the bot can be connected to a Telegram Business account to receive its
         * messages. Returned only in getMe.
         */
        public ?bool $can_connect_to_business,
        /** True, if the bot has a main Web App. Returned only in getMe. */
        public ?bool $has_main_web_app,
        /**
         * True, if the bot has forum topic mode enabled in private chats. Returned only in
         * getMe.
         */
        public ?bool $has_topics_enabled,
        /**
         * True, if the bot allows users to create and delete topics in private chats.
         * Returned only in getMe.
         */
        public ?bool $allows_users_to_create_topics,
    ) {
    }
}
