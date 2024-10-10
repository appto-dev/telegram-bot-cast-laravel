<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to forward multiple messages of any kind. If some of the
 * specified messages can't be found or forwarded, they are skipped. Service
 * messages and messages with protected content can't be forwarded. Album grouping
 * is kept for forwarded messages. On success, an array of <a
 * href="#messageid">MessageId</a> of the sent messages is returned.
 *
 * @version Telegram Bot API 7.10
 */
final class ForwardMessages extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format @channelusername)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum
         * supergroups only
         * @var int
         */
        public ?int $message_thread_id,
        /**
         * Unique identifier for the chat where the original messages were sent (or channel
         * username in the format @channelusername)
         * @var int|string
         */
        public int|string $from_chat_id,
        /**
         * A JSON-serialized list of 1-100 identifiers of messages in the chat from_chat_id
         * to forward. The identifiers must be specified in a strictly increasing order.
         * @var int[]
         */
        public array $message_ids,
        /**
         * Sends the messages silently. Users will receive a notification with no sound.
         * @var bool
         */
        public ?bool $disable_notification,
        /**
         * Protects the contents of the forwarded messages from forwarding and saving
         * @var bool
         */
        public ?bool $protect_content,
    ) {
    }
}
