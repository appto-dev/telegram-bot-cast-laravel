<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A simple method for testing your bot's authentication token. Requires no
 * parameters. Returns basic information about the bot in form of a <a
 * href="https://core.telegram.org/bots/api#user">User</a> object.
 */
final class GetMe extends Data implements TelegramBotData
{
}
