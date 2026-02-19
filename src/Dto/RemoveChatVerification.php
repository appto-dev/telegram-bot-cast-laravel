<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Removes verification from a chat that is currently verified <a
 * href="https://telegram.org/verify#third-party-verification">on behalf of the organization</a> represented by the bot.
 * Returns <em>True</em> on success.
 */
final class RemoveChatVerification extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier for the target chat or username of the target channel (in the format <code>@channelusername</code>) */
        public int|string $chat_id,
    ) {
    }
}
