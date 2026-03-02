<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to set a tag for a regular member in a group or a supergroup. The bot must be an administrator
 * in the chat for this to work and must have the <em>can_manage_tags</em> administrator right. Returns
 * <em>True</em> on success.
 */
final class SetChatMemberTag extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format
         * <code>@supergroupusername</code>)
         */
        public int|string $chat_id,
        /** Unique identifier of the target user */
        public int $user_id,
        /** New tag for the member; 0-16 characters, emoji are not allowed */
        public ?string $tag,
    ) {
    }
}
