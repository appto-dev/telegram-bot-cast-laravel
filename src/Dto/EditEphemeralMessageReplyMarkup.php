<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\InlineKeyboardMarkup;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to edit only the reply markup of an ephemeral message. Note that it is not guaranteed that the
 * user will receive the message edit event, especially if they are offline. On success, <em>True</em> is
 * returned.
 */
final class EditEphemeralMessageReplyMarkup extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup in the format
         * <code>@username</code>
         */
        public int|string $chat_id,
        /** Identifier of the user who received the message */
        public int $receiver_user_id,
        /** Identifier of the ephemeral message to edit */
        public int $ephemeral_message_id,
        /** A JSON-serialized object for an <a href="/bots/features#inline-keyboards">inline keyboard</a> */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
