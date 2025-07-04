<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * A method to get the current Telegram Stars balance of the bot. Requires no
 * parameters. On success, returns a <a href="#staramount">StarAmount</a> object.
 */
final class GetMyStarBalance extends Data implements TelegramMethodInterface
{
}
