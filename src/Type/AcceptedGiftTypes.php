<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes the types of gifts that can be gifted to a user or a chat.
 */
final class AcceptedGiftTypes extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * True, if unlimited regular gifts are accepted
         * @var bool
         */
        public bool $unlimited_gifts,
        /**
         * True, if limited regular gifts are accepted
         * @var bool
         */
        public bool $limited_gifts,
        /**
         * True, if unique gifts or gifts that can be upgraded to unique for free are
         * accepted
         * @var bool
         */
        public bool $unique_gifts,
        /**
         * True, if a Telegram Premium subscription is accepted
         * @var bool
         */
        public bool $premium_subscription,
    ) {
    }
}
