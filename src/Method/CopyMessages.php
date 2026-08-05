<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class CopyMessages extends Data implements TelegramMethod
{
    public function __construct(
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
         * @var  int|string  Unique identifier for the chat where the original messages were sent (or username
         * of the target bot, supergroup or channel in the format <code>@username</code>)
         */
        public int|string $from_chat_id,
        /**
         * @var  int[]  A JSON-serialized list of 1-100 identifiers of messages in the chat
         * <em>from_chat_id</em> to copy. The identifiers must be specified in a strictly increasing order.
         */
        public array $message_ids,
        /**
         * @var  bool|null  Sends the messages
         * <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
         * notification with no sound.
         */
        public ?bool $disable_notification,
        /** @var  bool|null  Protects the contents of the sent messages from forwarding and saving */
        public ?bool $protect_content,
        /** @var  bool|null  Pass <em>True</em> to copy the messages without their captions */
        public ?bool $remove_caption,
    ) {
    }
}
