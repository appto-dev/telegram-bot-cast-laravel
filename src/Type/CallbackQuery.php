<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\MaybeInaccessibleMessageCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class CallbackQuery extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Unique identifier for this query */
        public string $id,
        /** @var  User  Sender */
        public User $from,
        /**
         * @var  MaybeInaccessibleMessage|null  Message sent by the bot with the callback button that
         * originated the query
         */
        #[WithCast(MaybeInaccessibleMessageCast::class)]
        public ?MaybeInaccessibleMessage $message,
        /**
         * @var  string|null  Identifier of the message sent via the bot in inline mode, that originated the
         * query
         */
        public ?string $inline_message_id,
        /**
         * @var  string  Global identifier, uniquely corresponding to the chat to which the message with the
         * callback button was sent. Useful for high scores in games.
         */
        public string $chat_instance,
        /**
         * @var  string|null  Data associated with the callback button. Be aware that the message originated
         * the query can contain no callback buttons with this data.
         */
        public ?string $data,
        /** @var  string|null  Short name of a Game to be returned, serves as the unique identifier for the game */
        public ?string $game_short_name,
    ) {
    }
}
