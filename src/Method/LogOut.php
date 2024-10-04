<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * LogOut
 *
 * Use this method to log out from the cloud Bot API server before launching the
 * bot locally. You must log out the bot before running it locally, otherwise there
 * is no guarantee that the bot will receive updates. After a successful call, you
 * can immediately log in on a local server, but will not be able to log in back to
 * the cloud Bot API server for 10 minutes. Returns True on success. Requires no
 * parameters.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class LogOut extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;
}