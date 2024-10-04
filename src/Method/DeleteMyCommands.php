<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\BotCommandScope;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * DeleteMyCommands
 *
 * Use this method to delete the list of the bot's commands for the given scope and
 * user language. After deletion, higher level commands will be shown to affected
 * users. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class DeleteMyCommands extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /**
         * A JSON-serialized object, describing scope of users for which the
         * commands are relevant. Defaults to BotCommandScopeDefault.
         */
        public ?BotCommandScope $scope,
        /**
         * A two-letter ISO 639-1 language code. If empty, commands will be
         * applied to all users from the given scope, for whose language there
         * are no dedicated commands
         */
        public ?string $language_code,
    ) {
    }
}
