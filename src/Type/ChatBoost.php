<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object contains information about a chat boost.
 */
final class ChatBoost extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier of the boost
         * @var string
         */
        public string $boost_id,
        /**
         * Point in time (Unix timestamp) when the chat was boosted
         * @var int
         */
        public int $add_date,
        /**
         * Point in time (Unix timestamp) when the boost will automatically expire, unless
         * the booster's Telegram Premium subscription is prolonged
         * @var int
         */
        public int $expiration_date,
        /**
         * Source of the added boost
         * @var ChatBoostSource
         */
        public ChatBoostSource $source,
    ) {
    }
}
