<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * ChatBoostAdded
 *
 * This object represents a service message about a user boosting a chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ChatBoostAdded extends Data implements TypeInterface
{
    public function __construct(
        /** Number of boosts added by the user */
        public int $boost_count,
    ) {
    }
}
