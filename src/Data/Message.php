<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\MaybeInaccessibleMessage;
use Appto\TelegramBot\Interfaces\MessageOrigin;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a message.
 */
final class Message extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique message identifier inside this chat. In specific instances (e.g., message
         * containing a video sent to a big chat), the server might automatically schedule
         * a message instead of sending it immediately. In such cases, this field will be 0
         * and the relevant message will be unusable until it is actually sent
         */
        public int $message_id,
        /**
         * Unique identifier of a message thread or forum topic to which the message
         * belongs; for supergroups and private chats only
         */
        public ?int $message_thread_id,
        /** Information about the direct messages chat topic that contains the message */
        public ?DirectMessagesTopic $direct_messages_topic,
        /**
         * Sender of the message; may be empty for messages sent to channels. For backward
         * compatibility, if the message was sent on behalf of a chat, the field contains a
         * fake sender user in non-channel chats
         */
        public ?User $from,
        /**
         * Sender of the message when sent on behalf of a chat. For example, the supergroup
         * itself for messages sent by its anonymous administrators or a linked channel for
         * messages automatically forwarded to the channel's discussion group. For backward
         * compatibility, if the message was sent on behalf of a chat, the field from
         * contains a fake sender user in non-channel chats.
         */
        public ?Chat $sender_chat,
        /**
         * If the sender of the message boosted the chat, the number of boosts added by the
         * user
         */
        public ?int $sender_boost_count,
        /**
         * The bot that actually sent the message on behalf of the business account.
         * Available only for outgoing messages sent on behalf of the connected business
         * account.
         */
        public ?User $sender_business_bot,
        /**
         * Date the message was sent in Unix time. It is always a positive number,
         * representing a valid date.
         */
        public int $date,
        /**
         * Unique identifier of the business connection from which the message was
         * received. If non-empty, the message belongs to a chat of the corresponding
         * business account that is independent from any potential bot chat which might
         * share the same identifier.
         */
        public ?string $business_connection_id,
        /** Chat the message belongs to */
        public Chat $chat,
        /** Information about the original message for forwarded messages */
        public ?MessageOrigin $forward_origin,
        /**
         * True, if the message is sent to a topic in a forum supergroup or a private chat
         * with the bot
         */
        public ?true $is_topic_message,
        /**
         * True, if the message is a channel post that was automatically forwarded to the
         * connected discussion group
         */
        public ?true $is_automatic_forward,
        /**
         * Information about the message that is being replied to, which may come from
         * another chat or forum topic
         */
        public ?ExternalReplyInfo $external_reply,
        /**
         * For replies that quote part of the original message, the quoted part of the
         * message
         */
        public ?TextQuote $quote,
        /** For replies to a story, the original story */
        public ?Story $reply_to_story,
        /** Identifier of the specific checklist task that is being replied to */
        public ?int $reply_to_checklist_task_id,
        /** Bot through which the message was sent */
        public ?User $via_bot,
        /** Date the message was last edited in Unix time */
        public ?int $edit_date,
        /** True, if the message can't be forwarded */
        public ?true $has_protected_content,
        /**
         * True, if the message was sent by an implicit action, for example, as an away or
         * a greeting business message, or as a scheduled message
         */
        public ?true $is_from_offline,
        /**
         * True, if the message is a paid post. Note that such posts must not be deleted
         * for 24 hours to receive the payment and can't be edited.
         */
        public ?true $is_paid_post,
        /** The unique identifier of a media message group this message belongs to */
        public ?string $media_group_id,
        /**
         * Signature of the post author for messages in channels, or the custom title of an
         * anonymous group administrator
         */
        public ?string $author_signature,
        /**
         * The number of Telegram Stars that were paid by the sender of the message to send
         * it
         */
        public ?int $paid_star_count,
        /** For text messages, the actual UTF-8 text of the message */
        public ?string $text,
        /**
         * For text messages, special entities like usernames, URLs, bot commands, etc.
         * that appear in the text
         */
        public ?MessageEntity $entities,
        /**
         * Options used for link preview generation for the message, if it is a text
         * message and link preview options were changed
         */
        public ?LinkPreviewOptions $link_preview_options,
        /**
         * Information about suggested post parameters if the message is a suggested post
         * in a channel direct messages chat. If the message is an approved or declined
         * suggested post, then it can't be edited.
         */
        public ?SuggestedPostInfo $suggested_post_info,
        /** Unique identifier of the message effect added to the message */
        public ?string $effect_id,
        /**
         * Message is an animation, information about the animation. For backward
         * compatibility, when this field is set, the document field will also be set
         */
        public ?Animation $animation,
        /** Message is an audio file, information about the file */
        public ?Audio $audio,
        /** Message is a general file, information about the file */
        public ?Document $document,
        /** Message contains paid media; information about the paid media */
        public ?PaidMediaInfo $paid_media,
        /** Message is a photo, available sizes of the photo */
        public ?PhotoSize $photo,
        /** Message is a sticker, information about the sticker */
        public ?Sticker $sticker,
        /** Message is a forwarded story */
        public ?Story $story,
        /** Message is a video, information about the video */
        public ?Video $video,
        /** Message is a video note, information about the video message */
        public ?VideoNote $video_note,
        /** Message is a voice message, information about the file */
        public ?Voice $voice,
        /** Caption for the animation, audio, document, paid media, photo, video or voice */
        public ?string $caption,
        /**
         * For messages with a caption, special entities like usernames, URLs, bot
         * commands, etc. that appear in the caption
         */
        public ?MessageEntity $caption_entities,
        /** True, if the caption must be shown above the message media */
        public ?true $show_caption_above_media,
        /** True, if the message media is covered by a spoiler animation */
        public ?true $has_media_spoiler,
        /** Message is a checklist */
        public ?Checklist $checklist,
        /** Message is a shared contact, information about the contact */
        public ?Contact $contact,
        /** Message is a dice with random value */
        public ?Dice $dice,
        /** Message is a game, information about the game. More about games */
        public ?Game $game,
        /** Message is a native poll, information about the poll */
        public ?Poll $poll,
        /**
         * Message is a venue, information about the venue. For backward compatibility,
         * when this field is set, the location field will also be set
         */
        public ?Venue $venue,
        /** Message is a shared location, information about the location */
        public ?Location $location,
        /**
         * New members that were added to the group or supergroup and information about
         * them (the bot itself may be one of these members)
         */
        public ?User $new_chat_members,
        /**
         * A member was removed from the group, information about them (this member may be
         * the bot itself)
         */
        public ?User $left_chat_member,
        /** Service message: chat owner has left */
        public ?ChatOwnerLeft $chat_owner_left,
        /** Service message: chat owner has changed */
        public ?ChatOwnerChanged $chat_owner_changed,
        /** A chat title was changed to this value */
        public ?string $new_chat_title,
        /** A chat photo was change to this value */
        public ?PhotoSize $new_chat_photo,
        /** Service message: the chat photo was deleted */
        public ?true $delete_chat_photo,
        /** Service message: the group has been created */
        public ?true $group_chat_created,
        /**
         * Service message: the supergroup has been created. This field can't be received
         * in a message coming through updates, because bot can't be a member of a
         * supergroup when it is created. It can only be found in reply_to_message if
         * someone replies to a very first message in a directly created supergroup.
         */
        public ?true $supergroup_chat_created,
        /**
         * Service message: the channel has been created. This field can't be received in a
         * message coming through updates, because bot can't be a member of a channel when
         * it is created. It can only be found in reply_to_message if someone replies to a
         * very first message in a channel.
         */
        public ?true $channel_chat_created,
        /** Service message: auto-delete timer settings changed in the chat */
        public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed,
        /**
         * The group has been migrated to a supergroup with the specified identifier. This
         * number may have more than 32 significant bits and some programming languages may
         * have difficulty/silent defects in interpreting it. But it has at most 52
         * significant bits, so a signed 64-bit integer or double-precision float type are
         * safe for storing this identifier.
         */
        public ?int $migrate_to_chat_id,
        /**
         * The supergroup has been migrated from a group with the specified identifier.
         * This number may have more than 32 significant bits and some programming
         * languages may have difficulty/silent defects in interpreting it. But it has at
         * most 52 significant bits, so a signed 64-bit integer or double-precision float
         * type are safe for storing this identifier.
         */
        public ?int $migrate_from_chat_id,
        /**
         * Specified message was pinned. Note that the Message object in this field will
         * not contain further reply_to_message fields even if it itself is a reply.
         */
        public ?MaybeInaccessibleMessage $pinned_message,
        /**
         * Message is an invoice for a payment, information about the invoice. More about
         * payments
         */
        public ?Invoice $invoice,
        /**
         * Message is a service message about a successful payment, information about the
         * payment. More about payments
         */
        public ?SuccessfulPayment $successful_payment,
        /**
         * Message is a service message about a refunded payment, information about the
         * payment. More about payments
         */
        public ?RefundedPayment $refunded_payment,
        /** Service message: users were shared with the bot */
        public ?UsersShared $users_shared,
        /** Service message: a chat was shared with the bot */
        public ?ChatShared $chat_shared,
        /** Service message: a regular gift was sent or received */
        public ?GiftInfo $gift,
        /** Service message: a unique gift was sent or received */
        public ?UniqueGiftInfo $unique_gift,
        /** Service message: upgrade of a gift was purchased after the gift was sent */
        public ?GiftInfo $gift_upgrade_sent,
        /**
         * The domain name of the website on which the user has logged in. More about
         * Telegram Login
         */
        public ?string $connected_website,
        /**
         * Service message: the user allowed the bot to write messages after adding it to
         * the attachment or side menu, launching a Web App from a link, or accepting an
         * explicit request from a Web App sent by the method requestWriteAccess
         */
        public ?WriteAccessAllowed $write_access_allowed,
        /** Telegram Passport data */
        public ?PassportData $passport_data,
        /**
         * Service message. A user in the chat triggered another user's proximity alert
         * while sharing Live Location.
         */
        public ?ProximityAlertTriggered $proximity_alert_triggered,
        /** Service message: user boosted the chat */
        public ?ChatBoostAdded $boost_added,
        /** Service message: chat background set */
        public ?ChatBackground $chat_background_set,
        /** Service message: some tasks in a checklist were marked as done or not done */
        public ?ChecklistTasksDone $checklist_tasks_done,
        /** Service message: tasks were added to a checklist */
        public ?ChecklistTasksAdded $checklist_tasks_added,
        /**
         * Service message: the price for paid messages in the corresponding direct
         * messages chat of a channel has changed
         */
        public ?DirectMessagePriceChanged $direct_message_price_changed,
        /** Service message: forum topic created */
        public ?ForumTopicCreated $forum_topic_created,
        /** Service message: forum topic edited */
        public ?ForumTopicEdited $forum_topic_edited,
        /** Service message: forum topic closed */
        public ?ForumTopicClosed $forum_topic_closed,
        /** Service message: forum topic reopened */
        public ?ForumTopicReopened $forum_topic_reopened,
        /** Service message: the 'General' forum topic hidden */
        public ?GeneralForumTopicHidden $general_forum_topic_hidden,
        /** Service message: the 'General' forum topic unhidden */
        public ?GeneralForumTopicUnhidden $general_forum_topic_unhidden,
        /** Service message: a scheduled giveaway was created */
        public ?GiveawayCreated $giveaway_created,
        /** The message is a scheduled giveaway message */
        public ?Giveaway $giveaway,
        /** A giveaway with public winners was completed */
        public ?GiveawayWinners $giveaway_winners,
        /** Service message: a giveaway without public winners was completed */
        public ?GiveawayCompleted $giveaway_completed,
        /** Service message: the price for paid messages has changed in the chat */
        public ?PaidMessagePriceChanged $paid_message_price_changed,
        /** Service message: a suggested post was approved */
        public ?SuggestedPostApproved $suggested_post_approved,
        /** Service message: approval of a suggested post has failed */
        public ?SuggestedPostApprovalFailed $suggested_post_approval_failed,
        /** Service message: a suggested post was declined */
        public ?SuggestedPostDeclined $suggested_post_declined,
        /** Service message: payment for a suggested post was received */
        public ?SuggestedPostPaid $suggested_post_paid,
        /** Service message: payment for a suggested post was refunded */
        public ?SuggestedPostRefunded $suggested_post_refunded,
        /** Service message: video chat scheduled */
        public ?VideoChatScheduled $video_chat_scheduled,
        /** Service message: video chat started */
        public ?VideoChatStarted $video_chat_started,
        /** Service message: video chat ended */
        public ?VideoChatEnded $video_chat_ended,
        /** Service message: new participants invited to a video chat */
        public ?VideoChatParticipantsInvited $video_chat_participants_invited,
        /** Service message: data sent by a Web App */
        public ?WebAppData $web_app_data,
        /**
         * Inline keyboard attached to the message. login_url buttons are represented as
         * ordinary url buttons.
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
