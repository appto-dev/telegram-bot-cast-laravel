<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\EphemeralMessageParameters;
use Appto\TelegramBot\Type\ForceReply;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputRichMessage;
use Appto\TelegramBot\Type\ReplyKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardRemove;
use Appto\TelegramBot\Type\ReplyParameters;
use Appto\TelegramBot\Type\SuggestedPostParameters;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class SendRichMessage extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  string|null  Unique identifier of the business connection on behalf of which the message will
         * be sent. Bot can send rich messages on behalf of a business account only if the corresponding user
         * can send rich messages.
         */
        public ?string $business_connection_id,
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target bot, supergroup or
         * channel in the format <code>@username</code>
         */
        public int|string $chat_id,
        /**
         * @var  int|null  Unique identifier for the target message thread (topic) of a forum; for forum
         * supergroups and private chats of bots with forum topic mode enabled only
         */
        public ?int $message_thread_id,
        /**
         * @var  int|null  Identifier of the direct messages topic to which the message will be sent; required
         * if the message is sent to a direct messages chat
         */
        public ?int $direct_messages_topic_id,
        /**
         * @var  EphemeralMessageParameters|null  A JSON-serialized object containing the parameters of the
         * ephemeral message to send
         */
        public ?EphemeralMessageParameters $ephemeral_message_parameters,
        /** @var  InputRichMessage  The message to be sent */
        public InputRichMessage $rich_message,
        /**
         * @var  bool|null  Sends the message
         * <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
         * notification with no sound.
         */
        public ?bool $disable_notification,
        /** @var  bool|null  Protects the contents of the sent message from forwarding and saving */
        public ?bool $protect_content,
        /**
         * @var  bool|null  Pass <em>True</em> to allow up to 1000 messages per second, ignoring
         * <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a>
         * for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's
         * balance.
         */
        public ?bool $allow_paid_broadcast,
        /**
         * @var  string|null  Unique identifier of the message effect to be added to the message; for private
         * chats only
         */
        public ?string $message_effect_id,
        /**
         * @var  SuggestedPostParameters|null  A JSON-serialized object containing the parameters of the
         * suggested post to send; for direct messages chats only. If the message is sent as a reply to another
         * suggested post, then that suggested post is automatically declined.
         */
        public ?SuggestedPostParameters $suggested_post_parameters,
        /** @var  ReplyParameters|null  Description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
        /**
         * @var  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null  Additional
         * interface options. A JSON-serialized object for an
         * <a href="/bots/features#inline-keyboards">inline keyboard</a>,
         * <a href="/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply
         * keyboard or to force a reply from the user.
         */
        public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup,
    ) {
    }
}
