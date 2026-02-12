<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\MenuButton;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to change the bot's menu button in a private chat, or the
 * default menu button. Returns <em>True</em> on success.
 */
final class SetChatMenuButton extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target private chat. If not specified, default bot's
         * menu button will be changed
         */
        public ?int $chat_id,
        /**
         * A JSON-serialized object for the bot's new menu button. Defaults to <a
         * href="https://core.telegram.org/bots/api#menubuttondefault">MenuButtonDefault</a>
         */
        public ?MenuButton $menu_button,
    ) {
    }
}
