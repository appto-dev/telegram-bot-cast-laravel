<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * A simple method for testing your bot's authentication token. Requires no
 * parameters. Returns basic information about the bot in form of a <a
 * href="#user">User</a> object.
 *
 * @version Telegram Bot API 7.10
 */
final class GetMe extends Data implements TelegramMethodContract
{
}
