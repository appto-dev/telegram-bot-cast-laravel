<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * ChatBoostSourceGiftCode
 *
 * The boost was obtained by the creation of Telegram Premium gift codes to boost a
 * chat. Each such code boosts the chat 4 times for the duration of the
 * corresponding Telegram Premium subscription.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ChatBoostSourceGiftCode extends Dto implements TypeInterface
{
    public function __construct(
        /** Source of the boost, always "gift_code" */
        public string $source,
        /** User for which the gift code was created */
        public User $user,
    ) {
    }
}
