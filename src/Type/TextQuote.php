<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class TextQuote extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Text of the quoted part of a message that is replied to by the given message */
        public string $text,
        /**
         * @var  MessageEntity[]|null  Special entities that appear in the quote. Currently, only bold, italic,
         * underline, strikethrough, spoiler, custom_emoji, and date_time entities are kept in quotes.
         */
        public ?array $entities,
        /**
         * @var  int  Approximate quote position in the original message in UTF-16 code units as specified by
         * the sender
         */
        public int $position,
        /**
         * @var  true|null  True, if the quote was chosen manually by the message sender. Otherwise, the quote
         * was added automatically by the server.
         */
        public ?true $is_manual,
    ) {
    }
}
