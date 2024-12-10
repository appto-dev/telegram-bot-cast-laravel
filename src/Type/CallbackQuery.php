<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents an incoming callback query from a callback button in an
 * <a href="/bots/features#inline-keyboards">inline keyboard</a>. If the button
 * that originated the query was attached to a message sent by the bot, the field
 * <em>message</em> will be present. If the button was attached to a message sent
 * via the bot (in <a href="#inline-mode">inline mode</a>), the field
 * <em>inline_message_id</em> will be present. Exactly one of the fields
 * <em>data</em> or <em>game_short_name</em> will be present.
 */
final class CallbackQuery extends Data implements TelegramTypeInterface
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
         * Message sent by the bot with the callback button that originated the query
         * @var MaybeInaccessibleMessage
         */
        public ?MaybeInaccessibleMessage $message,
        /**
         * Identifier of the message sent via the bot in inline mode, that originated the
         * query.
         * @var string
         */
        public ?string $inline_message_id,
        /**
         * Global identifier, uniquely corresponding to the chat to which the message with
         * the callback button was sent. Useful for high scores in games.
         * @var string
         */
        public string $chat_instance,
        /**
         * Data associated with the callback button. Be aware that the message originated
         * the query can contain no callback buttons with this data.
         * @var string
         */
        public ?string $data,
        /**
         * Short name of a Game to be returned, serves as the unique identifier for the
         * game
         * @var string
         */
        public ?string $game_short_name,
    ) {
    }
}
