<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object contains information about the users whose identifiers were shared with the bot using a <a
 * href="https://core.telegram.org/bots/api#keyboardbuttonrequestusers">KeyboardButtonRequestUsers</a> button.
 */
final class UsersShared extends Data implements TelegramBotData
{
    public function __construct(
        /** Identifier of the request */
        public int $request_id,
        /**
         * Information about users shared with the bot.
         * @var array<SharedUser>
         */
        public array $users,
    ) {
    }
}
