<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents an incoming inline query. When the user sends an empty
 * query, your bot could return some default or trending results.
 */
final class InlineQuery extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique identifier for this query */
        public string $id,
        /** Sender */
        public User $from,
        /** Text of the query (up to 256 characters) */
        public string $query,
        /** Offset of the results to be returned, can be controlled by the bot */
        public string $offset,
        /**
         * Type of the chat from which the inline query was sent. Can be either "sender"
         * for a private chat with the inline query sender, "private", "group",
         * "supergroup", or "channel". The chat type should be always known for requests
         * sent from official clients and most third-party clients, unless the request was
         * sent from a secret chat
         */
        public ?string $chat_type,
        /** Sender location, only for bots that request user location */
        public ?Location $location,
    ) {
    }
}
