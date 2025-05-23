<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes reply parameters for the message that is being sent.
 */
final class ReplyParameters extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Identifier of the message that will be replied to in the current chat, or in the
         * chat chat_id if it is specified
         * @var int
         */
        public int $message_id,
        /**
         * If the message to be replied to is from a different chat, unique identifier for
         * the chat or username of the channel (in the format @channelusername). Not
         * supported for messages sent on behalf of a business account.
         * @var int|string
         */
        public int|string|null $chat_id,
        /**
         * Pass True if the message should be sent even if the specified message to be
         * replied to is not found. Always False for replies in another chat or forum
         * topic. Always True for messages sent on behalf of a business account.
         * @var bool
         */
        public ?bool $allow_sending_without_reply,
        /**
         * Quoted part of the message to be replied to; 0-1024 characters after entities
         * parsing. The quote must be an exact substring of the message to be replied to,
         * including bold, italic, underline, strikethrough, spoiler, and custom_emoji
         * entities. The message will fail to send if the quote isn't found in the original
         * message.
         * @var string
         */
        public ?string $quote,
        /**
         * Mode for parsing entities in the quote. See formatting options for more details.
         * @var string
         */
        public ?string $quote_parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the quote. It can be
         * specified instead of quote_parse_mode.
         * @var MessageEntity[]
         */
        public ?array $quote_entities,
        /**
         * Position of the quote in the original message in UTF-16 code units
         * @var int
         */
        public ?int $quote_position,
    ) {
    }
}
