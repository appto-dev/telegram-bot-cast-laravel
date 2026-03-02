<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to copy messages of any kind. If some of the specified messages can't be found or copied, they
 * are skipped. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice
 * messages can't be copied. A quiz <a href="https://core.telegram.org/bots/api#poll">poll</a> can be copied only
 * if the value of the field <em>correct_option_id</em> is known to the bot. The method is analogous to the
 * method <a href="https://core.telegram.org/bots/api#forwardmessages">forwardMessages</a>, but the copied
 * messages don't have a link to the original message. Album grouping is kept for copied messages. On success, an
 * array of <a href="https://core.telegram.org/bots/api#messageid">MessageId</a> of the sent messages is
 * returned.
 */
final class CopyMessages extends Dto implements TelegramBotDto
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
         * Identifier of the direct messages topic to which the messages will be sent; required if the messages are sent
         * to a direct messages chat
         */
        public ?int $direct_messages_topic_id,
        /**
         * Unique identifier for the chat where the original messages were sent (or channel username in the format
         * <code>@channelusername</code>)
         */
        public int|string $from_chat_id,
        /**
         * A JSON-serialized list of 1-100 identifiers of messages in the chat <em>from_chat_id</em> to copy. The
         * identifiers must be specified in a strictly increasing order.
         * @var array<int>
         */
        public array $message_ids,
        /**
         * Sends the messages <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will
         * receive a notification with no sound.
         */
        public ?bool $disable_notification,
        /** Protects the contents of the sent messages from forwarding and saving */
        public ?bool $protect_content,
        /** Pass <em>True</em> to copy the messages without their captions */
        public ?bool $remove_caption,
    ) {
    }
}
