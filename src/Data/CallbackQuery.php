<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\MaybeInaccessibleMessage;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents an incoming callback query from a callback button in an
 * <a href="https://core.telegram.org/bots/features#inline-keyboards">inline
 * keyboard</a>. If the button that originated the query was attached to a message
 * sent by the bot, the field <em>message</em> will be present. If the button was
 * attached to a message sent via the bot (in <a
 * href="https://core.telegram.org/bots/api#inline-mode">inline mode</a>), the
 * field <em>inline_message_id</em> will be present. Exactly one of the fields
 * <em>data</em> or <em>game_short_name</em> will be present.
 */
final class CallbackQuery extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique identifier for this query */
        public string $id,
        /** Sender */
        public User $from,
        /** Message sent by the bot with the callback button that originated the query */
        public ?MaybeInaccessibleMessage $message,
        /**
         * Identifier of the message sent via the bot in inline mode, that originated the
         * query.
         */
        public ?string $inline_message_id,
        /**
         * Global identifier, uniquely corresponding to the chat to which the message with
         * the callback button was sent. Useful for high scores in games.
         */
        public string $chat_instance,
        /**
         * Data associated with the callback button. Be aware that the message originated
         * the query can contain no callback buttons with this data.
         */
        public ?string $data,
        /**
         * Short name of a Game to be returned, serves as the unique identifier for the
         * game
         */
        public ?string $game_short_name,
    ) {
    }
}
