<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ReactionType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object contains full information about a chat.
 */
final class ChatFullInfo extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier for this chat. This number may have more than 32 significant bits and some programming
         * languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a
         * signed 64-bit integer or double-precision float type are safe for storing this identifier.
         */
        public int $id,
        /** Type of the chat, can be either "private", "group", "supergroup" or "channel" */
        public string $type,
        /** Title, for supergroups, channels and group chats */
        public ?string $title,
        /** Username, for private chats, supergroups and channels if available */
        public ?string $username,
        /** First name of the other party in a private chat */
        public ?string $first_name,
        /** Last name of the other party in a private chat */
        public ?string $last_name,
        /** True, if the supergroup chat is a forum (has topics enabled) */
        public ?true $is_forum,
        /** True, if the chat is the direct messages chat of a channel */
        public ?true $is_direct_messages,
        /**
         * Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link
         * preview. See accent colors for more details.
         */
        public int $accent_color_id,
        /** The maximum number of reactions that can be set on a message in the chat */
        public int $max_reaction_count,
        /** Chat photo */
        public ?ChatPhoto $photo,
        /**
         * If non-empty, the list of all active chat usernames; for private chats, supergroups and channels
         * @var string[]
         */
        public ?array $active_usernames,
        /** For private chats, the date of birth of the user */
        public ?Birthdate $birthdate,
        /** For private chats with business accounts, the intro of the business */
        public ?BusinessIntro $business_intro,
        /** For private chats with business accounts, the location of the business */
        public ?BusinessLocation $business_location,
        /** For private chats with business accounts, the opening hours of the business */
        public ?BusinessOpeningHours $business_opening_hours,
        /** For private chats, the personal channel of the user */
        public ?Chat $personal_chat,
        /** Information about the corresponding channel chat; for direct messages chats only */
        public ?Chat $parent_chat,
        /**
         * List of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed.
         * @var ReactionType[]
         */
        public ?array $available_reactions,
        /** Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background */
        public ?string $background_custom_emoji_id,
        /** Identifier of the accent color for the chat's profile background. See profile accent colors for more details. */
        public ?int $profile_accent_color_id,
        /** Custom emoji identifier of the emoji chosen by the chat for its profile background */
        public ?string $profile_background_custom_emoji_id,
        /** Custom emoji identifier of the emoji status of the chat or the other party in a private chat */
        public ?string $emoji_status_custom_emoji_id,
        /** Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any */
        public ?int $emoji_status_expiration_date,
        /** Bio of the other party in a private chat */
        public ?string $bio,
        /**
         * True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links
         * only in chats with the user
         */
        public ?true $has_private_forwards,
        /**
         * True, if the privacy settings of the other party restrict sending voice and video note messages in the private
         * chat
         */
        public ?true $has_restricted_voice_and_video_messages,
        /** True, if users need to join the supergroup before they can send messages */
        public ?true $join_to_send_messages,
        /**
         * True, if all users directly joining the supergroup without using an invite link need to be approved by
         * supergroup administrators
         */
        public ?true $join_by_request,
        /** Description, for groups, supergroups and channel chats */
        public ?string $description,
        /** Primary invite link, for groups, supergroups and channel chats */
        public ?string $invite_link,
        /** The most recent pinned message (by sending date) */
        public ?Message $pinned_message,
        /** Default chat member permissions, for groups and supergroups */
        public ?ChatPermissions $permissions,
        /** Information about types of gifts that are accepted by the chat or by the corresponding user for private chats */
        public AcceptedGiftTypes $accepted_gift_types,
        /**
         * True, if paid media messages can be sent or forwarded to the channel chat. The field is available only for
         * channel chats.
         */
        public ?true $can_send_paid_media,
        /**
         * For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in
         * seconds
         */
        public ?int $slow_mode_delay,
        /**
         * For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore
         * slow mode and chat permissions
         */
        public ?int $unrestrict_boost_count,
        /** The time after which all messages sent to the chat will be automatically deleted; in seconds */
        public ?int $message_auto_delete_time,
        /**
         * True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat
         * administrators.
         */
        public ?true $has_aggressive_anti_spam_enabled,
        /** True, if non-administrators can only get the list of bots and administrators in the chat */
        public ?true $has_hidden_members,
        /** True, if messages from the chat can't be forwarded to other chats */
        public ?true $has_protected_content,
        /** True, if new chat members will have access to old messages; available only to chat administrators */
        public ?true $has_visible_history,
        /** For supergroups, name of the group sticker set */
        public ?string $sticker_set_name,
        /** True, if the bot can change the group sticker set */
        public ?true $can_set_sticker_set,
        /**
         * For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by
         * all users and bots in the group.
         */
        public ?string $custom_emoji_sticker_set_name,
        /**
         * Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for
         * supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may
         * have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer
         * or double-precision float type are safe for storing this identifier.
         */
        public ?int $linked_chat_id,
        /** For supergroups, the location to which the supergroup is connected */
        public ?ChatLocation $location,
        /** For private chats, the rating of the user if any */
        public ?UserRating $rating,
        /** For private chats, the first audio added to the profile of the user */
        public ?Audio $first_profile_audio,
        /**
         * The color scheme based on a unique gift that must be used for the chat's name, message replies and link
         * previews
         */
        public ?UniqueGiftColors $unique_gift_colors,
        /** The number of Telegram Stars a general user have to pay to send a message to the chat */
        public ?int $paid_message_star_count,
    ) {
    }
}
