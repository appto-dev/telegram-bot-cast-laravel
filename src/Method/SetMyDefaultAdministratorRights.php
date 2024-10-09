<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\ChatAdministratorRights;
use Spatie\LaravelData\Data;

/**
 * Use this method to change the default administrator rights requested by the bot
 * when it's added as an administrator to groups or channels. These rights will be
 * suggested to users, but they are free to modify the list before adding the bot.
 * Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class SetMyDefaultAdministratorRights extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * A JSON-serialized object describing new default administrator rights. If not
         * specified, the default administrator rights will be cleared.
         * @var ChatAdministratorRights
         */
        public ?ChatAdministratorRights $rights,
        /**
         * Pass True to change the default administrator rights of the bot in channels.
         * Otherwise, the default administrator rights of the bot for groups and
         * supergroups will be changed.
         * @var bool
         */
        public ?bool $for_channels,
    ) {
    }
}
