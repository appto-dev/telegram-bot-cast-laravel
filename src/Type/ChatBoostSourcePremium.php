<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * ChatBoostSourcePremium
 *
 * The boost was obtained by subscribing to Telegram Premium or by gifting a
 * Telegram Premium subscription to another user.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ChatBoostSourcePremium extends Dto implements TypeInterface
{
    public function __construct(
        /** Source of the boost, always "premium" */
        public string $source,
        /** User that boosted the chat */
        public User $user,
    ) {
    }
}
