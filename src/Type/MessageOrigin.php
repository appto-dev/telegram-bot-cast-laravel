<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * MessageOrigin
 *
 * This object describes the origin of a message. It can be one of
 *  -
 * MessageOriginUser
 *  - MessageOriginHiddenUser
 *  - MessageOriginChat
 *  -
 * MessageOriginChannel
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class MessageOrigin extends Dto implements TypeInterface
{
}
