<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The boost was obtained by subscribing to Telegram Premium or by gifting a
 * Telegram Premium subscription to another user.
 */
final class ChatBoostSourcePremium extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Source of the boost, always "premium"
         * @var string
         */
        public string $source,
        /**
         * User that boosted the chat
         * @var User
         */
        public User $user,
    ) {
    }
}
