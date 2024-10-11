<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a list of boosts added to a chat by a user.
 *
 * @version Telegram Bot API 7.10
 */
final class UserChatBoosts extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The list of boosts added to the chat by the user
         * @var ChatBoost[]
         */
        public array $boosts,
    ) {
    }
}
