<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\MenuButton;
use Spatie\LaravelData\Data;

/**
 * Use this method to change the bot's menu button in a private chat, or the
 * default menu button. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class SetChatMenuButton extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target private chat. If not specified, default bot's
         * menu button will be changed
         * @var int|null
         */
        public ?int $chat_id,
        /**
         * A JSON-serialized object for the bot's new menu button. Defaults to
         * MenuButtonDefault
         * @var MenuButton|null
         */
        public ?MenuButton $menu_button,
    ) {
    }
}
