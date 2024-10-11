<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes the source of a chat boost. It can be one of
 *  - <a href="#chatboostsourcepremium">ChatBoostSourcePremium</a>
 *  - <a href="#chatboostsourcegiftcode">ChatBoostSourceGiftCode</a>
 *  - <a href="#chatboostsourcegiveaway">ChatBoostSourceGiveaway</a>
 *
 * @version Telegram Bot API 7.10
 */
final class ChatBoostSource extends Data implements TelegramTypeInterface
{
}
