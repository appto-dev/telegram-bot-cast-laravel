<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object contains information about the quoted part of a message that is replied to by the given message.
 */
final class TextQuote extends Data implements TelegramBotData
{
    public function __construct(
        /** Text of the quoted part of a message that is replied to by the given message */
        public string $text,
        /**
         * Special entities that appear in the quote. Currently, only bold, italic, underline, strikethrough, spoiler,
         * and custom_emoji entities are kept in quotes.
         * @var array<MessageEntity>
         */
        public ?array $entities,
        /** Approximate quote position in the original message in UTF-16 code units as specified by the sender */
        public int $position,
        /**
         * True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by
         * the server.
         */
        public ?true $is_manual,
    ) {
    }
}
