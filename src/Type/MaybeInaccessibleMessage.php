<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * MaybeInaccessibleMessage
 *
 * This object describes a message that can be inaccessible to the bot. It can be
 * one of
 *  - Message
 *  - InaccessibleMessage
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class MaybeInaccessibleMessage extends Data implements TypeInterface
{
}
