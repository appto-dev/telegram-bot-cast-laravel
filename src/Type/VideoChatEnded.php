<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about a video chat ended in the chat.
 *
 * @version Telegram Bot API 7.11
 */
final class VideoChatEnded extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Video chat duration in seconds
         * @var int
         */
        public int $duration,
    ) {
    }
}
