<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object contains information about the users whose identifiers were shared
 * with the bot using a <a
 * href="#keyboardbuttonrequestusers">KeyboardButtonRequestUsers</a> button.
 *
 * @version Telegram Bot API 7.11
 */
final class UsersShared extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Identifier of the request
         * @var int
         */
        public int $request_id,
        /**
         * Information about users shared with the bot.
         * @var SharedUser[]
         */
        public array $users,
    ) {
    }
}
