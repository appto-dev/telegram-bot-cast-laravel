<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to get the current default administrator rights of the bot.
 * Returns <a
 * href="https://core.telegram.org/bots/api#chatadministratorrights">ChatAdministratorRights</a>
 * on success.
 */
final class GetMyDefaultAdministratorRights extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Pass <em>True</em> to get default administrator rights of the bot in channels.
         * Otherwise, default administrator rights of the bot for groups and supergroups
         * will be returned.
         */
        public ?bool $for_channels,
    ) {
    }
}
