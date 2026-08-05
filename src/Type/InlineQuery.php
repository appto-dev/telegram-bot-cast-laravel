<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to work in
 * <a href="/bots/inline">inline mode</a>.Please see our
 * <a href="/bots/inline">Introduction to Inline bots</a> for more details.
 * To enable this option, send the /setinline command to
 * <a href="https://t.me/botfather">@BotFather</a> and provide the placeholder text that the user will
 * see in the input field after typing your bot's name.
 */
class InlineQuery extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Unique identifier for this query */
        public string $id,
        /** @var  User  Sender */
        public User $from,
        /** @var  string  Text of the query (up to 256 characters) */
        public string $query,
        /** @var  string  Offset of the results to be returned, can be controlled by the bot */
        public string $offset,
        /**
         * @var  string|null  Type of the chat from which the inline query was sent. Can be either "sender" for
         * a private chat with the inline query sender, "private", "group", "supergroup", or "channel". The
         * chat type should be always known for requests sent from official clients and most third-party
         * clients, unless the request was sent from a secret chat.
         */
        public ?string $chat_type,
        /** @var  Location|null  Sender location, only for bots that request user location */
        public ?Location $location,
    ) {
    }
}
