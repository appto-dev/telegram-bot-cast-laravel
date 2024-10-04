<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * ChatBoostUpdated
 *
 * This object represents a boost added to a chat or changed.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ChatBoostUpdated extends Dto implements TypeInterface
{
    public function __construct(
        /** Chat which was boosted */
        public Chat $chat,
        /** Information about the chat boost */
        public ChatBoost $boost,
    ) {
    }
}
