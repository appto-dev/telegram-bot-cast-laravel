<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method for your bot to leave a group, supergroup or channel. Returns
 * <em>True</em> on success.
 */
final class LeaveChat extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or
         * channel (in the format <code>@channelusername</code>). Channel direct messages
         * chats aren't supported; leave the corresponding channel instead.
         */
        public int|string $chat_id,
    ) {
    }
}
