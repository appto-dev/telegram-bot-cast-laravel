<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to get a list of administrators in a chat. Returns an Array of <a
 * href="https://core.telegram.org/bots/api#chatmember">ChatMember</a> objects.
 */
final class GetChatAdministrators extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or channel in the format
         * <code>@username</code>
         */
        public int|string $chat_id,
        /**
         * Pass <em>True</em> to additionally receive all bots that are administrators of the chat. By default, bots
         * other than the current bot are omitted.
         */
        public ?bool $return_bots,
    ) {
    }
}
