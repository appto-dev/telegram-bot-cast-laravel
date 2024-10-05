<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * ChatBoostRemoved
 *
 * This object represents a boost removed from a chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ChatBoostRemoved extends Data implements TypeInterface
{
    public function __construct(
        /** Chat which was boosted */
        public Chat $chat,
        /** Unique identifier of the boost */
        public string $boost_id,
        /** Point in time (Unix timestamp) when the boost was removed */
        public int $remove_date,
        /** Source of the removed boost */
        public ChatBoostSource $source,
    ) {
    }
}
