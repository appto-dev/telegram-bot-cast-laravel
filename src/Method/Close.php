<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to close the bot instance before moving it from one local server
 * to another. You need to delete the webhook before calling this method to ensure
 * that the bot isn't launched again after server restart. The method will return
 * error 429 in the first 10 minutes after the bot is launched. Returns
 * <em>True</em> on success. Requires no parameters.
 *
 * @version Telegram Bot API 7.11
 */
final class Close extends Data implements TelegramMethodInterface
{
}
