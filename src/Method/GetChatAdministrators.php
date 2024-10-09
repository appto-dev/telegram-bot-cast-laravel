<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to get a list of administrators in a chat, which aren't bots.
 * Returns an Array of <a href="#chatmember">ChatMember</a> objects.
 *
 * @version Telegram Bot API 7.10
 */
final class GetChatAdministrators extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or
         * channel (in the format @channelusername)
         * @var int|string
         */
        public int|string $chat_id,
    ) {
    }
}
