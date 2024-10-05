<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * UsersShared
 *
 * This object contains information about the users whose identifiers were shared
 * with the bot using a KeyboardButtonRequestUsers button.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class UsersShared extends Data implements TypeInterface
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
