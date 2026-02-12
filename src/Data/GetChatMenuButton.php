<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to get the current value of the bot's menu button in a private
 * chat, or the default menu button. Returns <a
 * href="https://core.telegram.org/bots/api#menubutton">MenuButton</a> on success.
 */
final class GetChatMenuButton extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier for the target private chat. If not specified, default bot's
         * menu button will be returned
         */
        public ?int $chat_id,
    ) {
    }
}
