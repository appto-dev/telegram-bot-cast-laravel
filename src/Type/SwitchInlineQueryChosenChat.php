<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * SwitchInlineQueryChosenChat
 *
 * This object represents an inline button that switches the current user to inline
 * mode in a chosen chat, with an optional default inline query.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class SwitchInlineQueryChosenChat extends Dto implements TypeInterface
{
    public function __construct(
        /**
         * The default inline query to be inserted in the input field. If left
         * empty, only the bot's username will be inserted
         */
        public ?string $query,
        /** True, if private chats with users can be chosen */
        public ?bool $allow_user_chats,
        /** True, if private chats with bots can be chosen */
        public ?bool $allow_bot_chats,
        /** True, if group and supergroup chats can be chosen */
        public ?bool $allow_group_chats,
        /** True, if channel chats can be chosen */
        public ?bool $allow_channel_chats,
    ) {
    }
}
