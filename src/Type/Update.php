<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * There are two mutually exclusive ways of receiving updates for your bot - the
 * <a href="#getupdates">getUpdates</a> method on one hand and <a href="#setwebhook">webhooks</a> on
 * the other. Incoming updates are stored on the server until the bot receives them either way, but
 * they will not be kept longer than 24 hours.
 * Regardless of which option you choose, you will receive JSON-serialized <a href="#update">Update</a>
 * objects as a result.
 */
class Update extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int  The update's unique identifier. Update identifiers start from a certain positive number
         * and increase sequentially. This identifier becomes especially handy if you're using webhooks, since
         * it allows you to ignore repeated updates or to restore the correct update sequence, should they get
         * out of order. If there are no new updates for at least a week, then identifier of the next update
         * will be chosen randomly instead of sequentially.
         */
        public int $update_id,
        /** @var  Message|null  New incoming message of any kind - text, photo, sticker, etc. */
        public ?Message $message,
        /**
         * @var  Message|null  New version of a message that is known to the bot and was edited. This update
         * may at times be triggered by changes to message fields that are either unavailable or not actively
         * used by your bot.
         */
        public ?Message $edited_message,
        /** @var  Message|null  New incoming channel post of any kind - text, photo, sticker, etc. */
        public ?Message $channel_post,
        /**
         * @var  Message|null  New version of a channel post that is known to the bot and was edited. This
         * update may at times be triggered by changes to message fields that are either unavailable or not
         * actively used by your bot.
         */
        public ?Message $edited_channel_post,
        /**
         * @var  BusinessConnection|null  The bot was connected to or disconnected from a business account, or
         * a user edited an existing connection with the bot
         */
        public ?BusinessConnection $business_connection,
        /** @var  Message|null  New message from a connected business account */
        public ?Message $business_message,
        /** @var  Message|null  New version of a message from a connected business account */
        public ?Message $edited_business_message,
        /** @var  BusinessMessagesDeleted|null  Messages were deleted from a connected business account */
        public ?BusinessMessagesDeleted $deleted_business_messages,
        /**
         * @var  Message|null  New guest message. The bot can use the field Message.guest_query_id and the
         * method answerGuestQuery to send a message in response.
         */
        public ?Message $guest_message,
        /**
         * @var  MessageReactionUpdated|null  A reaction to a message was changed by a user. The bot must be an
         * administrator in the chat and must explicitly specify "message_reaction" in the list of
         * allowed_updates to receive these updates. The update isn't received for reactions set by bots.
         */
        public ?MessageReactionUpdated $message_reaction,
        /**
         * @var  MessageReactionCountUpdated|null  Reactions to a message with anonymous reactions were
         * changed. The bot must be an administrator in the chat and must explicitly specify
         * "message_reaction_count" in the list of allowed_updates to receive these updates. The updates are
         * grouped and can be sent with delay up to a few minutes.
         */
        public ?MessageReactionCountUpdated $message_reaction_count,
        /** @var  InlineQuery|null  New incoming inline query */
        public ?InlineQuery $inline_query,
        /**
         * @var  ChosenInlineResult|null  The result of an inline query that was chosen by a user and sent to
         * their chat partner. Please see our documentation on the feedback collecting for details on how to
         * enable these updates for your bot.
         */
        public ?ChosenInlineResult $chosen_inline_result,
        /** @var  CallbackQuery|null  New incoming callback query */
        public ?CallbackQuery $callback_query,
        /** @var  ShippingQuery|null  New incoming shipping query. Only for invoices with flexible price. */
        public ?ShippingQuery $shipping_query,
        /**
         * @var  PreCheckoutQuery|null  New incoming pre-checkout query. Contains full information about
         * checkout.
         */
        public ?PreCheckoutQuery $pre_checkout_query,
        /**
         * @var  PaidMediaPurchased|null  A user purchased paid media with a non-empty payload sent by the bot
         * in a non-channel chat
         */
        public ?PaidMediaPurchased $purchased_paid_media,
        /**
         * @var  Poll|null  New poll state. Bots receive only updates about manually stopped polls and polls,
         * which are sent by the bot.
         */
        public ?Poll $poll,
        /**
         * @var  PollAnswer|null  A user changed their answer in a non-anonymous poll. Bots receive new votes
         * only in polls that were sent by the bot itself.
         */
        public ?PollAnswer $poll_answer,
        /**
         * @var  ChatMemberUpdated|null  The bot's chat member status was updated in a chat. For private chats,
         * this update is received only when the bot is blocked or unblocked by the user.
         */
        public ?ChatMemberUpdated $my_chat_member,
        /**
         * @var  ChatMemberUpdated|null  A chat member's status was updated in a chat. The bot must be an
         * administrator in the chat and must explicitly specify "chat_member" in the list of allowed_updates
         * to receive these updates.
         */
        public ?ChatMemberUpdated $chat_member,
        /**
         * @var  ChatJoinRequest|null  A request to join the chat has been sent. The bot must have the
         * can_invite_users administrator right in the chat to receive these updates.
         */
        public ?ChatJoinRequest $chat_join_request,
        /**
         * @var  ChatBoostUpdated|null  A chat boost was added or changed. The bot must be an administrator in
         * the chat to receive these updates.
         */
        public ?ChatBoostUpdated $chat_boost,
        /**
         * @var  ChatBoostRemoved|null  A boost was removed from a chat. The bot must be an administrator in
         * the chat to receive these updates.
         */
        public ?ChatBoostRemoved $removed_chat_boost,
        /**
         * @var  ManagedBotUpdated|null  A new bot was created to be managed by the bot, or token or owner of a
         * managed bot was changed
         */
        public ?ManagedBotUpdated $managed_bot,
        /** @var  BotSubscriptionUpdated|null  User payment subscription has changed */
        public ?BotSubscriptionUpdated $subscription,
    ) {
    }
}
