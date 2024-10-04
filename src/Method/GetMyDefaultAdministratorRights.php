<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ChatAdministratorRights;
use Spatie\LaravelData\Data;

/**
 * GetMyDefaultAdministratorRights
 *
 * Use this method to get the current default administrator rights of the bot.
 * Returns ChatAdministratorRights on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class GetMyDefaultAdministratorRights extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ChatAdministratorRights::class;

    public function __construct(
        /**
         * Pass True to get default administrator rights of the bot in channels.
         * Otherwise, default administrator rights of the bot for groups and
         * supergroups will be returned.
         */
        public ?bool $for_channels,
    ) {
    }
}
