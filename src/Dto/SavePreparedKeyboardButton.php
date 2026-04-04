<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\KeyboardButton;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Stores a keyboard button that can be used by a user within a Mini App. Returns a <a
 * href="https://core.telegram.org/bots/api#preparedkeyboardbutton">PreparedKeyboardButton</a> object.
 */
final class SavePreparedKeyboardButton extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the target user that can use the button */
        public int $user_id,
        /**
         * A JSON-serialized object describing the button to be saved. The button must be of the type
         * <em>request_users</em>, <em>request_chat</em>, or <em>request_managed_bot</em>
         */
        public KeyboardButton $button,
    ) {
    }
}
