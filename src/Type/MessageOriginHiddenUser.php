<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The message was originally sent by an unknown user.
 *
 * @version Telegram Bot API 7.11
 */
final class MessageOriginHiddenUser extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the message origin, always "hidden_user"
         * @var string
         */
        public string $type,
        /**
         * Date the message was sent originally in Unix time
         * @var int
         */
        public int $date,
        /**
         * Name of the user that sent the message originally
         * @var string
         */
        public string $sender_user_name,
    ) {
    }
}
