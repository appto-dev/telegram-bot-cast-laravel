<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * Close
 *
 * Use this method to close the bot instance before moving it from one local server
 * to another. You need to delete the webhook before calling this method to ensure
 * that the bot isn't launched again after server restart. The method will return
 * error 429 in the first 10 minutes after the bot is launched. Returns True on
 * success. Requires no parameters.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class Close extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;
}
