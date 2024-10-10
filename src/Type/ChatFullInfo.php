<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object contains full information about a chat.
 *
 * @version Telegram Bot API 7.10
 */
final class ChatFullInfo extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique identifier for this chat. This number may have more than 32 significant
         * bits and some programming languages may have difficulty/silent defects in
         * interpreting it. But it has at most 52 significant bits, so a signed 64-bit
         * integer or double-precision float type are safe for storing this identifier.
         * @var int
         */
        public int $id,
        /**
         * Type of the chat, can be either "private", "group", "supergroup" or "channel"
         * @var string
         */
        public string $type,
        /**
         * Title, for supergroups, channels and group chats
         * @var string
         */
        public ?string $title,
        /**
         * Username, for private chats, supergroups and channels if available
         * @var string
         */
        public ?string $username,
        /**
         * First name of the other party in a private chat
         * @var string
         */
        public ?string $first_name,
        /**
         * Last name of the other party in a private chat
         * @var string
         */
        public ?string $last_name,
        /**
         * True, if the supergroup chat is a forum (has topics enabled)
         * @var true
         */
        public ?true $is_forum,
        /**
         * Identifier of the accent color for the chat name and backgrounds of the chat
         * photo, reply header, and link preview. See accent colors for more details.
         * @var int
         */
        public int $accent_color_id,
        /**
         * The maximum number of reactions that can be set on a message in the chat
         * @var int
         */
        public int $max_reaction_count,
        /**
         * Chat photo
         * @var ChatPhoto
         */
        public ?ChatPhoto $photo,
        /**
         * If non-empty, the list of all active chat usernames; for private chats,
         * supergroups and channels
         * @var string[]
         */
        public ?array $active_usernames,
        /**
         * For private chats, the date of birth of the user
         * @var Birthdate
         */
        public ?Birthdate $birthdate,
        /**
         * For private chats with business accounts, the intro of the business
         * @var BusinessIntro
         */
        public ?BusinessIntro $business_intro,
        /**
         * For private chats with business accounts, the location of the business
         * @var BusinessLocation
         */
        public ?BusinessLocation $business_location,
        /**
         * For private chats with business accounts, the opening hours of the business
         * @var BusinessOpeningHours
         */
        public ?BusinessOpeningHours $business_opening_hours,
        /**
         * For private chats, the personal channel of the user
         * @var Chat
         */
        public ?Chat $personal_chat,
        /**
         * List of available reactions allowed in the chat. If omitted, then all emoji
         * reactions are allowed.
         * @var ReactionType[]
         */
        public ?array $available_reactions,
        /**
         * Custom emoji identifier of the emoji chosen by the chat for the reply header and
         * link preview background
         * @var string
         */
        public ?string $background_custom_emoji_id,
        /**
         * Identifier of the accent color for the chat's profile background. See profile
         * accent colors for more details.
         * @var int
         */
        public ?int $profile_accent_color_id,
        /**
         * Custom emoji identifier of the emoji chosen by the chat for its profile
         * background
         * @var string
         */
        public ?string $profile_background_custom_emoji_id,
        /**
         * Custom emoji identifier of the emoji status of the chat or the other party in a
         * private chat
         * @var string
         */
        public ?string $emoji_status_custom_emoji_id,
        /**
         * Expiration date of the emoji status of the chat or the other party in a private
         * chat, in Unix time, if any
         * @var int
         */
        public ?int $emoji_status_expiration_date,
        /**
         * Bio of the other party in a private chat
         * @var string
         */
        public ?string $bio,
        /**
         * True, if privacy settings of the other party in the private chat allows to use
         * tg://user?id=<user_id> links only in chats with the user
         * @var true
         */
        public ?true $has_private_forwards,
        /**
         * True, if the privacy settings of the other party restrict sending voice and
         * video note messages in the private chat
         * @var true
         */
        public ?true $has_restricted_voice_and_video_messages,
        /**
         * True, if users need to join the supergroup before they can send messages
         * @var true
         */
        public ?true $join_to_send_messages,
        /**
         * True, if all users directly joining the supergroup without using an invite link
         * need to be approved by supergroup administrators
         * @var true
         */
        public ?true $join_by_request,
        /**
         * Description, for groups, supergroups and channel chats
         * @var string
         */
        public ?string $description,
        /**
         * Primary invite link, for groups, supergroups and channel chats
         * @var string
         */
        public ?string $invite_link,
        /**
         * The most recent pinned message (by sending date)
         * @var Message
         */
        public ?Message $pinned_message,
        /**
         * Default chat member permissions, for groups and supergroups
         * @var ChatPermissions
         */
        public ?ChatPermissions $permissions,
        /**
         * True, if paid media messages can be sent or forwarded to the channel chat. The
         * field is available only for channel chats.
         * @var true
         */
        public ?true $can_send_paid_media,
        /**
         * For supergroups, the minimum allowed delay between consecutive messages sent by
         * each unprivileged user; in seconds
         * @var int
         */
        public ?int $slow_mode_delay,
        /**
         * For supergroups, the minimum number of boosts that a non-administrator user
         * needs to add in order to ignore slow mode and chat permissions
         * @var int
         */
        public ?int $unrestrict_boost_count,
        /**
         * The time after which all messages sent to the chat will be automatically
         * deleted; in seconds
         * @var int
         */
        public ?int $message_auto_delete_time,
        /**
         * True, if aggressive anti-spam checks are enabled in the supergroup. The field is
         * only available to chat administrators.
         * @var true
         */
        public ?true $has_aggressive_anti_spam_enabled,
        /**
         * True, if non-administrators can only get the list of bots and administrators in
         * the chat
         * @var true
         */
        public ?true $has_hidden_members,
        /**
         * True, if messages from the chat can't be forwarded to other chats
         * @var true
         */
        public ?true $has_protected_content,
        /**
         * True, if new chat members will have access to old messages; available only to
         * chat administrators
         * @var true
         */
        public ?true $has_visible_history,
        /**
         * For supergroups, name of the group sticker set
         * @var string
         */
        public ?string $sticker_set_name,
        /**
         * True, if the bot can change the group sticker set
         * @var true
         */
        public ?true $can_set_sticker_set,
        /**
         * For supergroups, the name of the group's custom emoji sticker set. Custom emoji
         * from this set can be used by all users and bots in the group.
         * @var string
         */
        public ?string $custom_emoji_sticker_set_name,
        /**
         * Unique identifier for the linked chat, i.e. the discussion group identifier for
         * a channel and vice versa; for supergroups and channel chats. This identifier may
         * be greater than 32 bits and some programming languages may have
         * difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so
         * a signed 64 bit integer or double-precision float type are safe for storing this
         * identifier.
         * @var int
         */
        public ?int $linked_chat_id,
        /**
         * For supergroups, the location to which the supergroup is connected
         * @var ChatLocation
         */
        public ?ChatLocation $location,
    ) {
    }
}
