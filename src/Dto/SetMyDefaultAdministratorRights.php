<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\ChatAdministratorRights;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to change the default administrator rights requested by the bot when it's added as an administrator to
 * groups or channels. These rights will be suggested to users, but they are free to modify the list before adding the bot.
 * Returns <em>True</em> on success.
 */
final class SetMyDefaultAdministratorRights extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights
         * will be cleared.
         */
        public ?ChatAdministratorRights $rights,
        /**
         * Pass <em>True</em> to change the default administrator rights of the bot in channels. Otherwise, the default
         * administrator rights of the bot for groups and supergroups will be changed.
         */
        public ?bool $for_channels,
    ) {
    }
}
