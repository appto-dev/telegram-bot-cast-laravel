<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ReplyParameters extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int|null  Identifier of the message that will be replied to in the current chat, or in the
         * chat chat_id if it is specified. Required if ephemeral_message_id isn't specified.
         */
        public ?int $message_id,
        /**
         * @var  int|string|null  If the message to be replied to is from a different chat, unique identifier
         * for the chat or username of the bot, supergroup or channel in the format @username. Not supported
         * for messages sent on behalf of a business account, messages from channel direct messages chats and
         * ephemeral messages.
         */
        public int|string|null $chat_id,
        /**
         * @var  int|null  Identifier of the incoming ephemeral message that will be replied to in the current
         * chat. A reply to an ephemeral message must itself be an ephemeral message. An ephemeral message may
         * only be replied to within 15 seconds of being sent. Required if message_id isn't specified.
         */
        public ?int $ephemeral_message_id,
        /**
         * @var  bool|null  Pass True if the message should be sent even if the specified message to be replied
         * to is not found. Always False for replies in another chat or forum topic, and sent ephemeral
         * messages. Always True for messages sent on behalf of a business account.
         */
        public ?bool $allow_sending_without_reply,
        /**
         * @var  string|null  Quoted part of the message to be replied to; 0-1024 characters after entities
         * parsing. The quote must be an exact substring of the message to be replied to, including bold,
         * italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities. The message will
         * fail to send if the quote isn't found in the original message. Ignored for ephemeral messages.
         */
        public ?string $quote,
        /** @var  string|null  Mode for parsing entities in the quote. See formatting options for more details. */
        public ?string $quote_parse_mode,
        /**
         * @var  MessageEntity[]|null  A JSON-serialized list of special entities that appear in the quote. It
         * can be specified instead of quote_parse_mode.
         */
        public ?array $quote_entities,
        /** @var  int|null  Position of the quote in the original message in UTF-16 code units */
        public ?int $quote_position,
        /** @var  int|null  Identifier of the specific checklist task to be replied to */
        public ?int $checklist_task_id,
        /** @var  string|null  Persistent identifier of the specific poll option to be replied to */
        public ?string $poll_option_id,
    ) {
    }
}
