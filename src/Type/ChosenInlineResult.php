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
 * see in the input field after typing your bot's name, or use the parameters
 * <em>supports_inline_queries</em> and <em>inline_query_placeholder</em> of the method
 * <a href="#setmysettings">setMySettings</a>.
 */
class ChosenInlineResult extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  The unique identifier for the result that was chosen */
        public string $result_id,
        /** @var  User  The user that chose the result */
        public User $from,
        /**
         * @var  Location|null  Sender location, only for bots that enabled user location requests via
         * @BotFather or using the parameter needs_inline_query_location of the method setMySettings
         */
        public ?Location $location,
        /**
         * @var  string|null  Identifier of the sent inline message. Available only if there is an inline
         * keyboard attached to the message. Will also be received in callback queries and can be used to edit
         * the message.
         */
        public ?string $inline_message_id,
        /** @var  string  The query that was used to obtain the result */
        public string $query,
    ) {
    }
}
