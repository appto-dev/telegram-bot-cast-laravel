<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The
 * bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns
 * the new invite link as <em>String</em> on success.
 */
final class ExportChatInviteLink extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier for the target chat or username of the target channel (in the format <code>@channelusername</code>) */
        public int|string $chat_id,
    ) {
    }
}
