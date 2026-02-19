<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to forward multiple messages of any kind. If some of the specified messages can't be found or
 * forwarded, they are skipped. Service messages and messages with protected content can't be forwarded. Album
 * grouping is kept for forwarded messages. On success, an array of <a
 * href="https://core.telegram.org/bots/api#messageid">MessageId</a> of the sent messages is returned.
 */
final class ForwardMessages extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format
         * <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of
         * bots with forum topic mode enabled only
         */
        public ?int $message_thread_id,
        /**
         * Identifier of the direct messages topic to which the messages will be forwarded; required if the messages are
         * forwarded to a direct messages chat
         */
        public ?int $direct_messages_topic_id,
        /**
         * Unique identifier for the chat where the original messages were sent (or channel username in the format
         * <code>@channelusername</code>)
         */
        public int|string $from_chat_id,
        /**
         * A JSON-serialized list of 1-100 identifiers of messages in the chat <em>from_chat_id</em> to forward. The
         * identifiers must be specified in a strictly increasing order.
         * @var array<int>
         */
        public array $message_ids,
        /**
         * Sends the messages <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will
         * receive a notification with no sound.
         */
        public ?bool $disable_notification,
        /** Protects the contents of the forwarded messages from forwarding and saving */
        public ?bool $protect_content,
    ) {
    }
}
