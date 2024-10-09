<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents an incoming inline query. When the user sends an empty
 * query, your bot could return some default or trending results.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineQuery extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique identifier for this query
         * @var string
         */
        public string $id,
        /**
         * Sender
         * @var User
         */
        public User $from,
        /**
         * Text of the query (up to 256 characters)
         * @var string
         */
        public string $query,
        /**
         * Offset of the results to be returned, can be controlled by the bot
         * @var string
         */
        public string $offset,
        /**
         * Type of the chat from which the inline query was sent. Can be either "sender"
         * for a private chat with the inline query sender, "private", "group",
         * "supergroup", or "channel". The chat type should be always known for requests
         * sent from official clients and most third-party clients, unless the request was
         * sent from a secret chat
         * @var string
         */
        public ?string $chat_type,
        /**
         * Sender location, only for bots that request user location
         * @var Location
         */
        public ?Location $location,
    ) {
    }
}
