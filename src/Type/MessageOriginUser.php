<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * The message was originally sent by a known user.
 *
 * @version Telegram Bot API 7.10
 */
final class MessageOriginUser extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the message origin, always "user"
         * @var string
         */
        public string $type,
        /**
         * Date the message was sent originally in Unix time
         * @var int
         */
        public int $date,
        /**
         * User that sent the message originally
         * @var User
         */
        public User $sender_user,
    ) {
    }
}
