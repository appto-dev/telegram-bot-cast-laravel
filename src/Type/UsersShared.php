<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object contains information about the users whose identifiers were shared
 * with the bot using a <a
 * href="#keyboardbuttonrequestusers">KeyboardButtonRequestUsers</a> button.
 *
 * @version Telegram Bot API 7.10
 */
final class UsersShared extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Identifier of the request
         * @var int
         */
        public int $request_id,
        /**
         * Information about users shared with the bot.
         * @var array<SharedUser>
         */
        public SharedUser $users,
    ) {
    }
}
