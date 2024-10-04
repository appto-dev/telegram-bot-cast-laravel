<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ChatAdministratorRights;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * SetMyDefaultAdministratorRights
 *
 * Use this method to change the default administrator rights requested by the bot
 * when it's added as an administrator to groups or channels. These rights will be
 * suggested to users, but they are free to modify the list before adding the bot.
 * Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class SetMyDefaultAdministratorRights extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /**
         * A JSON-serialized object describing new default administrator rights.
         * If not specified, the default administrator rights will be cleared.
         */
        public ?ChatAdministratorRights $rights,
        /**
         * Pass True to change the default administrator rights of the bot in
         * channels. Otherwise, the default administrator rights of the bot for
         * groups and supergroups will be changed.
         */
        public ?bool $for_channels,
    ) {
    }
}