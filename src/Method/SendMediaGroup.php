<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\InputMediaAudio;
use Appto\TelegramBot\Type\InputMediaDocument;
use Appto\TelegramBot\Type\InputMediaLivePhoto;
use Appto\TelegramBot\Type\InputMediaPhoto;
use Appto\TelegramBot\Type\InputMediaVideo;
use Appto\TelegramBot\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class SendMediaGroup extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  string|null  Unique identifier of the business connection on behalf of which the message will
         * be sent
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
         * @var  int|null  Identifier of the direct messages topic to which the messages will be sent; required
         * if the messages are sent to a direct messages chat
         */
        public ?int $direct_messages_topic_id,
        /**
         * @var  (InputMediaAudio|InputMediaDocument|InputMediaLivePhoto|InputMediaPhoto|InputMediaVideo)[]  A
         * JSON-serialized Array describing messages to be sent, must include 2-10 items
         */
        public array $media,
        /**
         * @var  bool|null  Sends messages
         * <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
         * notification with no sound.
         */
        public ?bool $disable_notification,
        /** @var  bool|null  Protects the contents of the sent messages from forwarding and saving */
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
        /** @var  ReplyParameters|null  Description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
    ) {
    }
}
