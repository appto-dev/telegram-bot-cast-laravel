<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\MessageEntity;
use Spatie\LaravelData\Data;

/**
 * Use this method to stream a partial message to a user while the message is being
 * generated; supported only for bots with forum topic mode enabled. Returns
 * <em>True</em> on success.
 */
final class SendMessageDraft extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target private chat
         * @var int
         */
        public int $chat_id,
        /**
         * Unique identifier for the target message thread
         * @var int
         */
        public ?int $message_thread_id,
        /**
         * Unique identifier of the message draft; must be non-zero. Changes of drafts with
         * the same identifier are animated
         * @var int
         */
        public int $draft_id,
        /**
         * Text of the message to be sent, 1-4096 characters after entities parsing
         * @var string
         */
        public string $text,
        /**
         * Mode for parsing entities in the message text. See <a
         * href="#formatting-options">formatting options</a> for more details.
         * @var string
         */
        public ?string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in message text, which
         * can be specified instead of <em>parse_mode</em>
         * @var MessageEntity[]
         */
        public ?array $entities,
    ) {
    }
}
