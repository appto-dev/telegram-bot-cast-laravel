<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to ban a channel chat in a supergroup or a channel. Until the
 * chat is <a
 * href="https://core.telegram.org/bots/api#unbanchatsenderchat">unbanned</a>, the
 * owner of the banned chat won't be able to send messages on behalf of any of
 * their channels. The bot must be an administrator in the supergroup or channel
 * for this to work and must have the appropriate administrator rights. Returns
 * <em>True</em> on success.
 */
final class BanChatSenderChat extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /** Unique identifier of the target sender chat */
        public int $sender_chat_id,
    ) {
    }
}
