<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to change the description of a group, a supergroup or a channel.
 * The bot must be an administrator in the chat for this to work and must have the
 * appropriate administrator rights. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class SetChatDescription extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * New chat description, 0-255 characters
         * @var string
         */
        public ?string $description,
    ) {
    }
}
