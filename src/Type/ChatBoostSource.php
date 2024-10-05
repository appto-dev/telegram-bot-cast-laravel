<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * ChatBoostSource
 *
 * This object describes the source of a chat boost. It can be one of
 *  -
 * ChatBoostSourcePremium
 *  - ChatBoostSourceGiftCode
 *  - ChatBoostSourceGiveaway
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ChatBoostSource extends Data implements TypeInterface
{
}
