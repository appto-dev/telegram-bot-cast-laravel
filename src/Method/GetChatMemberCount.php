<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to get the number of members in a chat. Returns <em>Int</em> on
 * success.
 *
 * @version Telegram Bot API 7.10
 */
final class GetChatMemberCount extends Data implements TelegramMethodContract
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
