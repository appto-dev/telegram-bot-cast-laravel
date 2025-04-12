<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes a gift received and owned by a user or a chat. Currently,
 * it can be one of
 *  - <a href="#ownedgiftregular">OwnedGiftRegular</a>
 *  - <a href="#ownedgiftunique">OwnedGiftUnique</a>
 */
final class OwnedGift extends Data implements TelegramTypeInterface
{
}
