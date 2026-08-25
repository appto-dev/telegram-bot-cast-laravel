<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\MaybeInaccessibleMessageCast;
use Appto\TelegramBot\Support\Casts\MessageOriginCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class Message extends Data implements TelegramType, MaybeInaccessibleMessage
{
    public function __construct(
        /**
         * @var  int  Unique message identifier inside this chat; 0 for ephemeral messages. In specific
         * instances (e.g., a message containing a video sent to a big chat), the server might automatically
         * schedule a message instead of sending it immediately. In such cases, this field will be 0 and the
         * relevant message will be unusable until it is actually sent.
         */
        public int $message_id,
        /**
         * @var  int|null  Unique identifier of a message thread or forum topic to which the message belongs;
         * for supergroups and private chats only
         */
        public ?int $message_thread_id,
        /**
         * @var  DirectMessagesTopic|null  Information about the direct messages chat topic that contains the
         * message
         */
        public ?DirectMessagesTopic $direct_messages_topic,
        /**
         * @var  User|null  Sender of the message; may be empty for messages sent to channels. For backward
         * compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in
         * non-channel chats.
         */
        public ?User $from,
        /**
         * @var  Chat|null  Sender of the message when sent on behalf of a chat. For example, the supergroup
         * itself for messages sent by its anonymous administrators or a linked channel for messages
         * automatically forwarded to the channel's discussion group. For backward compatibility, if the
         * message was sent on behalf of a chat, the field from contains a fake sender user in non-channel
         * chats.
         */
        public ?Chat $sender_chat,
        /**
         * @var  int|null  If the sender of the message boosted the chat, the number of boosts added by the
         * user
         */
        public ?int $sender_boost_count,
        /**
         * @var  User|null  The bot that actually sent the message on behalf of the business account. Available
         * only for outgoing messages sent on behalf of the connected business account.
         */
        public ?User $sender_business_bot,
        /** @var  string|null  Tag or custom title of the sender of the message; for supergroups only */
        public ?string $sender_tag,
        /** @var  User|null  For ephemeral messages, the user who received the message */
        public ?User $receiver_user,
        /**
         * @var  int|null  For ephemeral messages, identifier of the ephemeral message inside this chat. The
         * identifier may be reused for another ephemeral message after the message is deleted or expires.
         */
        public ?int $ephemeral_message_id,
        /**
         * @var  int  Date the message was sent in Unix time. It is always a positive number, representing a
         * valid date.
         */
        public int $date,
        /**
         * @var  string|null  The unique identifier for the guest query. Use this identifier with the method
         * answerGuestQuery to send a response message. If non-empty, the message belongs to the chat where the
         * guest bot was summoned, which may not coincide with other existing bot chats sharing the same
         * identifier.
         */
        public ?string $guest_query_id,
        /**
         * @var  string|null  Unique identifier of the business connection from which the message was received.
         * If non-empty, the message belongs to a chat of the corresponding business account that is
         * independent from any potential bot chat which might share the same identifier.
         */
        public ?string $business_connection_id,
        /** @var  Chat  Chat the message belongs to */
        public Chat $chat,
        /** @var  MessageOrigin|null  Information about the original message for forwarded messages */
        #[WithCast(MessageOriginCast::class)]
        public ?MessageOrigin $forward_origin,
        /**
         * @var  true|null  True, if the message is sent to a topic in a forum supergroup or a private chat
         * with the bot
         */
        public ?true $is_topic_message,
        /**
         * @var  true|null  True, if the message is a channel post that was automatically forwarded to the
         * connected discussion group
         */
        public ?true $is_automatic_forward,
        /**
         * @var  Message|null  For replies in the same chat and message thread, the original message. Note that
         * the Message object in this field will not contain further reply_to_message fields even if it itself
         * is a reply. If the message is a reply to an ephemeral message, then this field may be omitted.
         */
        public ?Message $reply_to_message,
        /**
         * @var  ExternalReplyInfo|null  Information about the message that is being replied to, which may come
         * from another chat or forum topic
         */
        public ?ExternalReplyInfo $external_reply,
        /**
         * @var  TextQuote|null  For replies that quote part of the original message, the quoted part of the
         * message
         */
        public ?TextQuote $quote,
        /** @var  Story|null  For replies to a story, the original story */
        public ?Story $reply_to_story,
        /** @var  int|null  Identifier of the specific checklist task that is being replied to */
        public ?int $reply_to_checklist_task_id,
        /** @var  string|null  Persistent identifier of the specific poll option that is being replied to */
        public ?string $reply_to_poll_option_id,
        /** @var  User|null  Bot through which the message was sent */
        public ?User $via_bot,
        /**
         * @var  User|null  For a message sent by a guest bot, this is the user whose original message
         * triggered the bot's response
         */
        public ?User $guest_bot_caller_user,
        /**
         * @var  Chat|null  For a message sent by a guest bot, this is the chat whose original message
         * triggered the bot's response
         */
        public ?Chat $guest_bot_caller_chat,
        /** @var  int|null  Date the message was last edited in Unix time */
        public ?int $edit_date,
        /** @var  true|null  True, if the message can't be forwarded */
        public ?true $has_protected_content,
        /**
         * @var  true|null  True, if the message was sent by an implicit action, for example, as an away or a
         * greeting business message, or as a scheduled message
         */
        public ?true $is_from_offline,
        /**
         * @var  true|null  True, if the message is a paid post. Note that such posts must not be deleted for
         * 24 hours to receive the payment and can't be edited.
         */
        public ?true $is_paid_post,
        /**
         * @var  string|null  The unique identifier inside this chat of a media message group this message
         * belongs to
         */
        public ?string $media_group_id,
        /**
         * @var  string|null  Signature of the post author for messages in channels, or the custom title of an
         * anonymous group administrator
         */
        public ?string $author_signature,
        /** @var  int|null  The number of Telegram Stars that were paid by the sender of the message to send it */
        public ?int $paid_star_count,
        /** @var  string|null  For text messages, the actual UTF-8 text of the message */
        public ?string $text,
        /**
         * @var  MessageEntity[]|null  For text messages, special entities like usernames, URLs, bot commands,
         * etc. that appear in the text
         */
        public ?array $entities,
        /**
         * @var  LinkPreviewOptions|null  Options used for link preview generation for the message, if it is a
         * text message and link preview options were changed
         */
        public ?LinkPreviewOptions $link_preview_options,
        /**
         * @var  SuggestedPostInfo|null  Information about suggested post parameters if the message is a
         * suggested post in a channel direct messages chat. If the message is an approved or declined
         * suggested post, then it can't be edited.
         */
        public ?SuggestedPostInfo $suggested_post_info,
        /** @var  string|null  Unique identifier of the message effect added to the message */
        public ?string $effect_id,
        /** @var  RichMessage|null  Message is a rich formatted message */
        public ?RichMessage $rich_message,
        /**
         * @var  Animation|null  Message is an animation, information about the animation. For backward
         * compatibility, when this field is set, the document field will also be set.
         */
        public ?Animation $animation,
        /** @var  Audio|null  Message is an audio file, information about the file */
        public ?Audio $audio,
        /** @var  Document|null  Message is a general file, information about the file */
        public ?Document $document,
        /**
         * @var  LivePhoto|null  Message is a live photo, information about the live photo. For backward
         * compatibility, when this field is set, the photo field will also be set.
         */
        public ?LivePhoto $live_photo,
        /** @var  PaidMediaInfo|null  Message contains paid media; information about the paid media */
        public ?PaidMediaInfo $paid_media,
        /** @var  PhotoSize[]|null  Message is a photo, available sizes of the photo */
        public ?array $photo,
        /** @var  Sticker|null  Message is a sticker, information about the sticker */
        public ?Sticker $sticker,
        /** @var  Story|null  Message is a forwarded story */
        public ?Story $story,
        /** @var  Video|null  Message is a video, information about the video */
        public ?Video $video,
        /** @var  VideoNote|null  Message is a video note, information about the video message */
        public ?VideoNote $video_note,
        /** @var  Voice|null  Message is a voice message, information about the file */
        public ?Voice $voice,
        /** @var  string|null  Caption for the animation, audio, document, paid media, photo, video or voice */
        public ?string $caption,
        /**
         * @var  MessageEntity[]|null  For messages with a caption, special entities like usernames, URLs, bot
         * commands, etc. that appear in the caption
         */
        public ?array $caption_entities,
        /** @var  true|null  True, if the caption must be shown above the message media */
        public ?true $show_caption_above_media,
        /** @var  true|null  True, if the message media is covered by a spoiler animation */
        public ?true $has_media_spoiler,
        /** @var  Checklist|null  Message is a checklist */
        public ?Checklist $checklist,
        /** @var  Contact|null  Message is a shared contact, information about the contact */
        public ?Contact $contact,
        /** @var  Dice|null  Message is a dice with random value */
        public ?Dice $dice,
        /** @var  Game|null  Message is a game, information about the game. More about games */
        public ?Game $game,
        /** @var  Poll|null  Message is a native poll, information about the poll */
        public ?Poll $poll,
        /**
         * @var  Venue|null  Message is a venue, information about the venue. For backward compatibility, when
         * this field is set, the location field will also be set.
         */
        public ?Venue $venue,
        /** @var  Location|null  Message is a shared location, information about the location */
        public ?Location $location,
        /**
         * @var  User[]|null  New members that were added to the group or supergroup and information about them
         * (the bot itself may be one of these members)
         */
        public ?array $new_chat_members,
        /**
         * @var  User|null  A member was removed from the group, information about them (this member may be the
         * bot itself)
         */
        public ?User $left_chat_member,
        /** @var  ChatOwnerLeft|null  Service message: chat owner has left */
        public ?ChatOwnerLeft $chat_owner_left,
        /** @var  ChatOwnerChanged|null  Service message: chat owner has changed */
        public ?ChatOwnerChanged $chat_owner_changed,
        /** @var  string|null  A chat title was changed to this value */
        public ?string $new_chat_title,
        /** @var  PhotoSize[]|null  A chat photo was change to this value */
        public ?array $new_chat_photo,
        /** @var  true|null  Service message: the chat photo was deleted */
        public ?true $delete_chat_photo,
        /** @var  true|null  Service message: the group has been created */
        public ?true $group_chat_created,
        /**
         * @var  true|null  Service message: the supergroup has been created. This field can't be received in a
         * message coming through updates, because bot can't be a member of a supergroup when it is created. It
         * can only be found in reply_to_message if someone replies to a very first message in a directly
         * created supergroup.
         */
        public ?true $supergroup_chat_created,
        /**
         * @var  true|null  Service message: the channel has been created. This field can't be received in a
         * message coming through updates, because bot can't be a member of a channel when it is created. It
         * can only be found in reply_to_message if someone replies to a very first message in a channel.
         */
        public ?true $channel_chat_created,
        /**
         * @var  MessageAutoDeleteTimerChanged|null  Service message: auto-delete timer settings changed in the
         * chat
         */
        public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed,
        /**
         * @var  int|null  The group has been migrated to a supergroup with the specified identifier. This
         * number may have more than 32 significant bits and some programming languages may have
         * difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed
         * 64-bit integer or double-precision float type are safe for storing this identifier.
         */
        public ?int $migrate_to_chat_id,
        /**
         * @var  int|null  The supergroup has been migrated from a group with the specified identifier. This
         * number may have more than 32 significant bits and some programming languages may have
         * difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed
         * 64-bit integer or double-precision float type are safe for storing this identifier.
         */
        public ?int $migrate_from_chat_id,
        /**
         * @var  MaybeInaccessibleMessage|null  Specified message was pinned. Note that the Message object in
         * this field will not contain further reply_to_message fields even if it itself is a reply.
         */
        #[WithCast(MaybeInaccessibleMessageCast::class)]
        public ?MaybeInaccessibleMessage $pinned_message,
        /**
         * @var  Invoice|null  Message is an invoice for a payment, information about the invoice. More about
         * payments
         */
        public ?Invoice $invoice,
        /**
         * @var  SuccessfulPayment|null  Message is a service message about a successful payment, information
         * about the payment. More about payments
         */
        public ?SuccessfulPayment $successful_payment,
        /**
         * @var  RefundedPayment|null  Message is a service message about a refunded payment, information about
         * the payment. More about payments
         */
        public ?RefundedPayment $refunded_payment,
        /** @var  UsersShared|null  Service message: users were shared with the bot */
        public ?UsersShared $users_shared,
        /** @var  ChatShared|null  Service message: a chat was shared with the bot */
        public ?ChatShared $chat_shared,
        /** @var  GiftInfo|null  Service message: a regular gift was sent or received */
        public ?GiftInfo $gift,
        /** @var  UniqueGiftInfo|null  Service message: a unique gift was sent or received */
        public ?UniqueGiftInfo $unique_gift,
        /** @var  GiftInfo|null  Service message: upgrade of a gift was purchased after the gift was sent */
        public ?GiftInfo $gift_upgrade_sent,
        /**
         * @var  string|null  The domain name of the website on which the user has logged in. More about
         * Telegram Login
         */
        public ?string $connected_website,
        /**
         * @var  WriteAccessAllowed|null  Service message: the user allowed the bot to write messages after
         * adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit
         * request from a Web App sent by the method requestWriteAccess
         */
        public ?WriteAccessAllowed $write_access_allowed,
        /** @var  PassportData|null  Telegram Passport data */
        public ?PassportData $passport_data,
        /**
         * @var  ProximityAlertTriggered|null  Service message: a user in the chat triggered another user's
         * proximity alert while sharing Live Location
         */
        public ?ProximityAlertTriggered $proximity_alert_triggered,
        /** @var  ChatBoostAdded|null  Service message: user boosted the chat */
        public ?ChatBoostAdded $boost_added,
        /** @var  ChatBackground|null  Service message: chat background set */
        public ?ChatBackground $chat_background_set,
        /**
         * @var  ChecklistTasksDone|null  Service message: some tasks in a checklist were marked as done or not
         * done
         */
        public ?ChecklistTasksDone $checklist_tasks_done,
        /** @var  ChecklistTasksAdded|null  Service message: tasks were added to a checklist */
        public ?ChecklistTasksAdded $checklist_tasks_added,
        /** @var  CommunityChatAdded|null  Service message: chat or bot added to a Community */
        public ?CommunityChatAdded $community_chat_added,
        /** @var  CommunityChatJoined|null  Service message: chat was joined by a user from a Community */
        public ?CommunityChatJoined $community_chat_joined,
        /** @var  CommunityChatRemoved|null  Service message: chat or bot removed from a Community */
        public ?CommunityChatRemoved $community_chat_removed,
        /**
         * @var  DirectMessagePriceChanged|null  Service message: the price for paid messages in the
         * corresponding direct messages chat of a channel has changed
         */
        public ?DirectMessagePriceChanged $direct_message_price_changed,
        /** @var  ForumTopicCreated|null  Service message: forum topic created */
        public ?ForumTopicCreated $forum_topic_created,
        /** @var  ForumTopicEdited|null  Service message: forum topic edited */
        public ?ForumTopicEdited $forum_topic_edited,
        /** @var  ForumTopicClosed|null  Service message: forum topic closed */
        public ?ForumTopicClosed $forum_topic_closed,
        /** @var  ForumTopicReopened|null  Service message: forum topic reopened */
        public ?ForumTopicReopened $forum_topic_reopened,
        /** @var  GeneralForumTopicHidden|null  Service message: the 'General' forum topic hidden */
        public ?GeneralForumTopicHidden $general_forum_topic_hidden,
        /** @var  GeneralForumTopicUnhidden|null  Service message: the 'General' forum topic unhidden */
        public ?GeneralForumTopicUnhidden $general_forum_topic_unhidden,
        /** @var  GiveawayCreated|null  Service message: a scheduled giveaway was created */
        public ?GiveawayCreated $giveaway_created,
        /** @var  Giveaway|null  The message is a scheduled giveaway message */
        public ?Giveaway $giveaway,
        /** @var  GiveawayWinners|null  A giveaway with public winners was completed */
        public ?GiveawayWinners $giveaway_winners,
        /** @var  GiveawayCompleted|null  Service message: a giveaway without public winners was completed */
        public ?GiveawayCompleted $giveaway_completed,
        /**
         * @var  ManagedBotCreated|null  Service message: user created a bot that will be managed by the
         * current bot
         */
        public ?ManagedBotCreated $managed_bot_created,
        /**
         * @var  PaidMessagePriceChanged|null  Service message: the price for paid messages has changed in the
         * chat
         */
        public ?PaidMessagePriceChanged $paid_message_price_changed,
        /** @var  PollOptionAdded|null  Service message: answer option was added to a poll */
        public ?PollOptionAdded $poll_option_added,
        /** @var  PollOptionDeleted|null  Service message: answer option was deleted from a poll */
        public ?PollOptionDeleted $poll_option_deleted,
        /** @var  SuggestedPostApproved|null  Service message: a suggested post was approved */
        public ?SuggestedPostApproved $suggested_post_approved,
        /** @var  SuggestedPostApprovalFailed|null  Service message: approval of a suggested post has failed */
        public ?SuggestedPostApprovalFailed $suggested_post_approval_failed,
        /** @var  SuggestedPostDeclined|null  Service message: a suggested post was declined */
        public ?SuggestedPostDeclined $suggested_post_declined,
        /** @var  SuggestedPostPaid|null  Service message: payment for a suggested post was received */
        public ?SuggestedPostPaid $suggested_post_paid,
        /** @var  SuggestedPostRefunded|null  Service message: payment for a suggested post was refunded */
        public ?SuggestedPostRefunded $suggested_post_refunded,
        /** @var  VideoChatScheduled|null  Service message: video chat scheduled */
        public ?VideoChatScheduled $video_chat_scheduled,
        /** @var  VideoChatStarted|null  Service message: video chat started */
        public ?VideoChatStarted $video_chat_started,
        /** @var  VideoChatEnded|null  Service message: video chat ended */
        public ?VideoChatEnded $video_chat_ended,
        /** @var  VideoChatParticipantsInvited|null  Service message: new participants invited to a video chat */
        public ?VideoChatParticipantsInvited $video_chat_participants_invited,
        /** @var  WebAppData|null  Service message: data sent by a Web App */
        public ?WebAppData $web_app_data,
        /**
         * @var  InlineKeyboardMarkup|null  Inline keyboard attached to the message. login_url buttons are
         * represented as ordinary url buttons.
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
