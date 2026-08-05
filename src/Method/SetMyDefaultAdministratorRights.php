<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\ChatAdministratorRights;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class SetMyDefaultAdministratorRights extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  ChatAdministratorRights|null  A JSON-serialized object describing new default administrator
         * rights. If not specified, the default administrator rights will be cleared.
         */
        public ?ChatAdministratorRights $rights,
        /**
         * @var  bool|null  Pass <em>True</em> to change the default administrator rights of the bot in
         * channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be
         * changed.
         */
        public ?bool $for_channels,
    ) {
    }
}
