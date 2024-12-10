<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to copy messages of any kind. If some of the specified messages
 * can't be found or copied, they are skipped. Service messages, paid media
 * messages, giveaway messages, giveaway winners messages, and invoice messages
 * can't be copied. A quiz <a href="#poll">poll</a> can be copied only if the value
 * of the field <em>correct_option_id</em> is known to the bot. The method is
 * analogous to the method <a href="#forwardmessages">forwardMessages</a>, but the
 * copied messages don't have a link to the original message. Album grouping is
 * kept for copied messages. On success, an array of <a
 * href="#messageid">MessageId</a> of the sent messages is returned.
 */
final class CopyMessages extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
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
         * username in the format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $from_chat_id,
        /**
         * A JSON-serialized list of 1-100 identifiers of messages in the chat
         * <em>from_chat_id</em> to copy. The identifiers must be specified in a strictly
         * increasing order.
         * @var int[]
         */
        public array $message_ids,
        /**
         * Sends the messages <a
         * href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>.
         * Users will receive a notification with no sound.
         * @var bool
         */
        public ?bool $disable_notification,
        /**
         * Protects the contents of the sent messages from forwarding and saving
         * @var bool
         */
        public ?bool $protect_content,
        /**
         * Pass <em>True</em> to copy the messages without their captions
         * @var bool
         */
        public ?bool $remove_caption,
    ) {
    }
}
