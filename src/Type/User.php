<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class User extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int  Unique identifier for this user or bot. This number may have more than 32 significant
         * bits and some programming languages may have difficulty/silent defects in interpreting it. But it
         * has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for
         * storing this identifier.
         */
        public int $id,
        /** @var  bool  True, if this user is a bot */
        public bool $is_bot,
        /** @var  string  User's or bot's first name */
        public string $first_name,
        /** @var  string|null  User's or bot's last name */
        public ?string $last_name,
        /** @var  string|null  User's or bot's username */
        public ?string $username,
        /** @var  string|null  IETF language tag of the user's language */
        public ?string $language_code,
        /** @var  true|null  True, if this user is a Telegram Premium user */
        public ?true $is_premium,
        /** @var  true|null  True, if this user added the bot to the attachment menu */
        public ?true $added_to_attachment_menu,
        /** @var  bool|null  True, if the bot can be invited to groups. Returned only in getMe. */
        public ?bool $can_join_groups,
        /** @var  bool|null  True, if privacy mode is disabled for the bot. Returned only in getMe. */
        public ?bool $can_read_all_group_messages,
        /**
         * @var  bool|null  True, if the bot supports guest queries from chats it is not a member of. Returned
         * only in getMe.
         */
        public ?bool $supports_guest_queries,
        /** @var  bool|null  True, if the bot supports inline queries. Returned only in getMe. */
        public ?bool $supports_inline_queries,
        /**
         * @var  bool|null  True, if the bot can be connected to a user account to manage it. Returned only in
         * getMe.
         */
        public ?bool $can_connect_to_business,
        /** @var  bool|null  True, if the bot has a main Web App. Returned only in getMe. */
        public ?bool $has_main_web_app,
        /**
         * @var  bool|null  True, if the bot has forum topic mode enabled in private chats. Returned only in
         * getMe.
         */
        public ?bool $has_topics_enabled,
        /**
         * @var  bool|null  True, if the bot allows users to create and delete topics in private chats.
         * Returned only in getMe.
         */
        public ?bool $allows_users_to_create_topics,
        /**
         * @var  bool|null  True, if other bots can be created to be controlled by the bot. Returned only in
         * getMe.
         */
        public ?bool $can_manage_bots,
        /**
         * @var  bool|null  True, if the bot supports join request queries and can be assigned to process them.
         * Returned only in getMe.
         */
        public ?bool $supports_join_request_queries,
    ) {
    }
}
