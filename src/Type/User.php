<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a Telegram user or bot.
 *
 * @version Telegram Bot API 7.10
 */
final class User extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique identifier for this user or bot. This number may have more than 32
         * significant bits and some programming languages may have difficulty/silent
         * defects in interpreting it. But it has at most 52 significant bits, so a 64-bit
         * integer or double-precision float type are safe for storing this identifier.
         * @var int
         */
        public int $id,
        /**
         * True, if this user is a bot
         * @var bool
         */
        public bool $is_bot,
        /**
         * User's or bot's first name
         * @var string
         */
        public string $first_name,
        /**
         * User's or bot's last name
         * @var string|null
         */
        public ?string $last_name,
        /**
         * User's or bot's username
         * @var string|null
         */
        public ?string $username,
        /**
         * IETF language tag of the user's language
         * @var string|null
         */
        public ?string $language_code,
        /**
         * True, if this user is a Telegram Premium user
         * @var true|null
         */
        public ?true $is_premium,
        /**
         * True, if this user added the bot to the attachment menu
         * @var true|null
         */
        public ?true $added_to_attachment_menu,
        /**
         * True, if the bot can be invited to groups. Returned only in getMe.
         * @var bool|null
         */
        public ?bool $can_join_groups,
        /**
         * True, if privacy mode is disabled for the bot. Returned only in getMe.
         * @var bool|null
         */
        public ?bool $can_read_all_group_messages,
        /**
         * True, if the bot supports inline queries. Returned only in getMe.
         * @var bool|null
         */
        public ?bool $supports_inline_queries,
        /**
         * True, if the bot can be connected to a Telegram Business account to receive its
         * messages. Returned only in getMe.
         * @var bool|null
         */
        public ?bool $can_connect_to_business,
        /**
         * True, if the bot has a main Web App. Returned only in getMe.
         * @var bool|null
         */
        public ?bool $has_main_web_app,
    ) {
    }
}
