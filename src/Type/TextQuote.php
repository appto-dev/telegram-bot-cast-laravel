<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object contains information about the quoted part of a message that is
 * replied to by the given message.
 *
 * @version Telegram Bot API 7.11
 */
final class TextQuote extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Text of the quoted part of a message that is replied to by the given message
         * @var string
         */
        public string $text,
        /**
         * Special entities that appear in the quote. Currently, only bold, italic,
         * underline, strikethrough, spoiler, and custom_emoji entities are kept in quotes.
         * @var MessageEntity[]
         */
        public ?array $entities,
        /**
         * Approximate quote position in the original message in UTF-16 code units as
         * specified by the sender
         * @var int
         */
        public int $position,
        /**
         * True, if the quote was chosen manually by the message sender. Otherwise, the
         * quote was added automatically by the server.
         * @var true
         */
        public ?true $is_manual,
    ) {
    }
}
