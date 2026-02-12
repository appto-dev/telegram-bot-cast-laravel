<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to stop a poll which was sent by the bot. On success, the
 * stopped <a href="https://core.telegram.org/bots/api#poll">Poll</a> is returned.
 */
final class StopPoll extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message to
         * be edited was sent
         */
        public ?string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /** Identifier of the original message with the poll */
        public int $message_id,
        /**
         * A JSON-serialized object for a new message <a
         * href="https://core.telegram.org/bots/features#inline-keyboards">inline
         * keyboard</a>.
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
