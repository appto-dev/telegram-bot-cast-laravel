<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * ReactionType
 *
 * This object describes the type of a reaction. Currently, it can be one of
 *  -
 * ReactionTypeEmoji
 *  - ReactionTypeCustomEmoji
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ReactionType extends Data implements TypeInterface
{
}
