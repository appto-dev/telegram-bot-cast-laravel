<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about a video chat scheduled in the
 * chat.
 *
 * @version Telegram Bot API 7.10
 */
final class VideoChatScheduled extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Point in time (Unix timestamp) when the video chat is supposed to be started by
         * a chat administrator
         * @var int
         */
        public int $start_date,
    ) {
    }
}
