<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about a change in the price of paid messages within
 * a chat.
 */
final class PaidMessagePriceChanged extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The new number of Telegram Stars that must be paid by non-administrator users of
         * the supergroup chat for each sent message
         * @var int
         */
        public int $paid_message_star_count,
    ) {
    }
}
