<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This <a href="#available-types">object</a> represents an incoming update.At most
 * one of the optional parameters can be present in any given update.
 */
final class Update extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The update's unique identifier. Update identifiers start from a certain positive
         * number and increase sequentially. This identifier becomes especially handy if
         * you're using webhooks, since it allows you to ignore repeated updates or to
         * restore the correct update sequence, should they get out of order. If there are
         * no new updates for at least a week, then identifier of the next update will be
         * chosen randomly instead of sequentially.
         * @var int
         */
        public int $update_id,
        /**
         * New incoming message of any kind - text, photo, sticker, etc.
         * @var Message
         */
        public ?Message $message,
        /**
         * New version of a message that is known to the bot and was edited. This update
         * may at times be triggered by changes to message fields that are either
         * unavailable or not actively used by your bot.
         * @var Message
         */
        public ?Message $edited_message,
        /**
         * New incoming channel post of any kind - text, photo, sticker, etc.
         * @var Message
         */
        public ?Message $channel_post,
        /**
         * New version of a channel post that is known to the bot and was edited. This
         * update may at times be triggered by changes to message fields that are either
         * unavailable or not actively used by your bot.
         * @var Message
         */
        public ?Message $edited_channel_post,
        /**
         * The bot was connected to or disconnected from a business account, or a user
         * edited an existing connection with the bot
         * @var BusinessConnection
         */
        public ?BusinessConnection $business_connection,
        /**
         * New message from a connected business account
         * @var Message
         */
        public ?Message $business_message,
        /**
         * New version of a message from a connected business account
         * @var Message
         */
        public ?Message $edited_business_message,
        /**
         * Messages were deleted from a connected business account
         * @var BusinessMessagesDeleted
         */
        public ?BusinessMessagesDeleted $deleted_business_messages,
        /**
         * A reaction to a message was changed by a user. The bot must be an administrator
         * in the chat and must explicitly specify "message_reaction" in the list of
         * allowed_updates to receive these updates. The update isn't received for
         * reactions set by bots.
         * @var MessageReactionUpdated
         */
        public ?MessageReactionUpdated $message_reaction,
        /**
         * Reactions to a message with anonymous reactions were changed. The bot must be an
         * administrator in the chat and must explicitly specify "message_reaction_count"
         * in the list of allowed_updates to receive these updates. The updates are grouped
         * and can be sent with delay up to a few minutes.
         * @var MessageReactionCountUpdated
         */
        public ?MessageReactionCountUpdated $message_reaction_count,
        /**
         * New incoming inline query
         * @var InlineQuery
         */
        public ?InlineQuery $inline_query,
        /**
         * The result of an inline query that was chosen by a user and sent to their chat
         * partner. Please see our documentation on the feedback collecting for details on
         * how to enable these updates for your bot.
         * @var ChosenInlineResult
         */
        public ?ChosenInlineResult $chosen_inline_result,
        /**
         * New incoming callback query
         * @var CallbackQuery
         */
        public ?CallbackQuery $callback_query,
        /**
         * New incoming shipping query. Only for invoices with flexible price
         * @var ShippingQuery
         */
        public ?ShippingQuery $shipping_query,
        /**
         * New incoming pre-checkout query. Contains full information about checkout
         * @var PreCheckoutQuery
         */
        public ?PreCheckoutQuery $pre_checkout_query,
        /**
         * A user purchased paid media with a non-empty payload sent by the bot in a
         * non-channel chat
         * @var PaidMediaPurchased
         */
        public ?PaidMediaPurchased $purchased_paid_media,
        /**
         * New poll state. Bots receive only updates about manually stopped polls and
         * polls, which are sent by the bot
         * @var Poll
         */
        public ?Poll $poll,
        /**
         * A user changed their answer in a non-anonymous poll. Bots receive new votes only
         * in polls that were sent by the bot itself.
         * @var PollAnswer
         */
        public ?PollAnswer $poll_answer,
        /**
         * The bot's chat member status was updated in a chat. For private chats, this
         * update is received only when the bot is blocked or unblocked by the user.
         * @var ChatMemberUpdated
         */
        public ?ChatMemberUpdated $my_chat_member,
        /**
         * A chat member's status was updated in a chat. The bot must be an administrator
         * in the chat and must explicitly specify "chat_member" in the list of
         * allowed_updates to receive these updates.
         * @var ChatMemberUpdated
         */
        public ?ChatMemberUpdated $chat_member,
        /**
         * A request to join the chat has been sent. The bot must have the can_invite_users
         * administrator right in the chat to receive these updates.
         * @var ChatJoinRequest
         */
        public ?ChatJoinRequest $chat_join_request,
        /**
         * A chat boost was added or changed. The bot must be an administrator in the chat
         * to receive these updates.
         * @var ChatBoostUpdated
         */
        public ?ChatBoostUpdated $chat_boost,
        /**
         * A boost was removed from a chat. The bot must be an administrator in the chat to
         * receive these updates.
         * @var ChatBoostRemoved
         */
        public ?ChatBoostRemoved $removed_chat_boost,
    ) {
    }
}
