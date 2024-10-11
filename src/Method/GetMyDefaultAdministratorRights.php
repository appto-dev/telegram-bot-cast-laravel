<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to get the current default administrator rights of the bot.
 * Returns <a href="#chatadministratorrights">ChatAdministratorRights</a> on
 * success.
 *
 * @version Telegram Bot API 7.10
 */
final class GetMyDefaultAdministratorRights extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Pass <em>True</em> to get default administrator rights of the bot in channels.
         * Otherwise, default administrator rights of the bot for groups and supergroups
         * will be returned.
         * @var bool
         */
        public ?bool $for_channels,
    ) {
    }
}
