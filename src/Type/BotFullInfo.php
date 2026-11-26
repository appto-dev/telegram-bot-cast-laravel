<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may not be returned when irrelevant.
 */
class BotFullInfo extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int  Unique identifier for this bot. This number may have more than 32 significant bits and
         * some programming languages may have difficulty/silent defects in interpreting it. But it has at most
         * 52 significant bits, so a 64-bit integer or double-precision float type is safe for storing this
         * identifier.
         */
        public int $id,
        /** @var  true  Always True */
        public true $is_bot,
        /** @var  string  Bot's first name */
        public string $first_name,
        /** @var  string|null  Bot's username */
        public ?string $username,
        /** @var  string[]|null  If non-empty, the list of all active usernames of the bot */
        public ?array $active_usernames,
        /** @var  bool  True, if the bot can be added to groups */
        public bool $can_join_groups,
        /** @var  bool  True, if privacy mode is disabled for the bot */
        public bool $can_read_all_group_messages,
        /** @var  bool  True, if the bot supports guest queries from chats it is not a member of */
        public bool $supports_guest_queries,
        /** @var  bool  True, if the bot supports inline queries */
        public bool $supports_inline_queries,
        /**
         * @var  string|null  Placeholder for inline queries, which is shown in the input field after the bot's
         * username; omitted if the default placeholder is used
         */
        public ?string $inline_query_placeholder,
        /** @var  bool  True, if the bot requests the location of the user with every inline query */
        public bool $needs_inline_query_location,
        /** @var  bool  True, if the bot can be connected to a user account to manage it */
        public bool $can_connect_to_business,
        /** @var  bool  True, if the bot has a main Web App */
        public bool $has_main_web_app,
        /** @var  bool  True, if the bot has forum topic mode enabled in private chats */
        public bool $has_topics_enabled,
        /** @var  bool  True, if the bot allows users to create and delete topics in private chats */
        public bool $allows_users_to_create_topics,
        /** @var  bool  True, if topics in private chats with the bot are shown in a sidebar */
        public bool $has_topic_sidebar,
        /** @var  bool  True, if other bots can be created to be controlled by the bot */
        public bool $can_manage_bots,
        /** @var  bool  True, if the bot supports join request queries and can be assigned to process them */
        public bool $supports_join_request_queries,
    ) {
    }
}
