<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\MenuButton;
use Spatie\LaravelData\Data;

/**
 * GetChatMenuButton
 *
 * Use this method to get the current value of the bot's menu button in a private
 * chat, or the default menu button. Returns MenuButton on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class GetChatMenuButton extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = MenuButton::class;

    public function __construct(
        /**
         * Unique identifier for the target private chat. If not specified,
         * default bot's menu button will be returned
         */
        public ?int $chat_id,
    ) {
    }
}
