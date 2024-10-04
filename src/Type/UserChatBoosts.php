<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * UserChatBoosts
 *
 * This object represents a list of boosts added to a chat by a user.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class UserChatBoosts extends Dto implements TypeInterface
{
    public function __construct(
        /**
         * The list of boosts added to the chat by the user
         * @var array<ChatBoost>
         */
        public array $boosts,
    ) {
    }
}