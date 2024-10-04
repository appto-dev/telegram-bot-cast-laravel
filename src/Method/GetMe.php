<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\User;
use Spatie\LaravelData\Data;

/**
 * GetMe
 *
 * A simple method for testing your bot's authentication token. Requires no
 * parameters. Returns basic information about the bot in form of a User object.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class GetMe extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = User::class;
}
