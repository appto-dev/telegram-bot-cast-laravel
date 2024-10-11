<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The boost was obtained by the creation of Telegram Premium gift codes to boost a
 * chat. Each such code boosts the chat 4 times for the duration of the
 * corresponding Telegram Premium subscription.
 *
 * @version Telegram Bot API 7.10
 */
final class ChatBoostSourceGiftCode extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Source of the boost, always "gift_code"
         * @var string
         */
        public string $source,
        /**
         * User for which the gift code was created
         * @var User
         */
        public User $user,
    ) {
    }
}
