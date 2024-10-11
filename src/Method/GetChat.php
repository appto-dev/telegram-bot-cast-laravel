<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to get up-to-date information about the chat. Returns a <a
 * href="#chatfullinfo">ChatFullInfo</a> object on success.
 *
 * @version Telegram Bot API 7.10
 */
final class GetChat extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or
         * channel (in the format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
    ) {
    }
}
