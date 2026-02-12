<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\InputMediaAudio;
use Appto\TelegramBot\Data\InputMediaDocument;
use Appto\TelegramBot\Data\InputMediaPhoto;
use Appto\TelegramBot\Data\InputMediaVideo;
use Appto\TelegramBot\Data\ReplyParameters;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to send a group of photos, videos, documents or audios as an
 * album. Documents and audio files can be only grouped in an album with messages
 * of the same type. On success, an array of <a
 * href="https://core.telegram.org/bots/api#message">Message</a> objects that were
 * sent is returned.
 */
final class SendMediaGroup extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be sent
         */
        public ?string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of a forum; for forum
         * supergroups and private chats of bots with forum topic mode enabled only
         */
        public ?int $message_thread_id,
        /**
         * Identifier of the direct messages topic to which the messages will be sent;
         * required if the messages are sent to a direct messages chat
         */
        public ?int $direct_messages_topic_id,
        /** A JSON-serialized array describing messages to be sent, must include 2-10 items */
        public InputMediaAudio|InputMediaDocument|InputMediaPhoto|InputMediaVideo $media,
        /**
         * Sends messages <a
         * href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>.
         * Users will receive a notification with no sound.
         */
        public ?bool $disable_notification,
        /** Protects the contents of the sent messages from forwarding and saving */
        public ?bool $protect_content,
        /**
         * Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a
         * href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting
         * limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will
         * be withdrawn from the bot's balance
         */
        public ?bool $allow_paid_broadcast,
        /**
         * Unique identifier of the message effect to be added to the message; for private
         * chats only
         */
        public ?string $message_effect_id,
        /** Description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
    ) {
    }
}
