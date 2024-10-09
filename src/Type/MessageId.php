<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a unique message identifier.
 *
 * @version Telegram Bot API 7.10
 */
final class MessageId extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique message identifier
         * @var int
         */
        public int $message_id,
    ) {
    }
}
