<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat
 * for this to work and must have the appropriate administrator rights. Use the field
 * <em>can_set_sticker_set</em> optionally returned in <a
 * href="https://core.telegram.org/bots/api#getchat">getChat</a> requests to check if the bot can use this
 * method. Returns <em>True</em> on success.
 */
final class DeleteChatStickerSet extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format
         * <code>@supergroupusername</code>)
         */
        public int|string $chat_id,
    ) {
    }
}
