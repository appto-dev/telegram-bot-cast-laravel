<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A method to get the current Telegram Stars balance of the bot. Requires no
 * parameters. On success, returns a <a
 * href="https://core.telegram.org/bots/api#staramount">StarAmount</a> object.
 */
final class GetMyStarBalance extends Data implements TelegramBotData
{
}
