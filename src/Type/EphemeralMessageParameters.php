<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may not be returned when irrelevant.
 */
class EphemeralMessageParameters extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int|null  Identifier of the user who will receive the message; required unless the message is
         * sent as an ephemeral reply to a callback query. If omitted, then the parameter chat_id of the method
         * is ignored. If specified together with callback_query_id, then it must be the identifier of the user
         * who pressed the button. Must be omitted for messages sent in chats where the bot isn't a member,
         * unless the message is a reply to an ephemeral message. It is not guaranteed that the user will
         * receive the message, especially if they are offline. See here for more details.
         */
        public ?int $receiver_user_id,
        /**
         * @var  string|null  Identifier of the callback query which triggered the message, if any. If
         * specified and receiver_user_id is omitted, then the message is sent as an ephemeral reply to the
         * callback query and will be shown only to the user who pressed the button. Ephemeral replies can't be
         * sent to callback queries from messages in channel direct messages chats. The bot must still answer
         * the callback query using answerCallbackQuery.
         */
        public ?string $callback_query_id,
        /**
         * @var  bool|null  Pass True if the ephemeral message must be shown in place of the original message.
         * Must be False for callback queries from ephemeral messages, which must be edited using regular
         * editEphemeralMessage… methods.
         */
        public ?bool $replace_callback_query_message,
    ) {
    }
}
