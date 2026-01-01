<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about a unique gift that was sent or received.
 */
final class UniqueGiftInfo extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Information about the gift
         * @var UniqueGift
         */
        public UniqueGift $gift,
        /**
         * Origin of the gift. Currently, either "upgrade" for gifts upgraded from regular
         * gifts, "transfer" for gifts transferred from other users or channels, "resale"
         * for gifts bought from other users, "gifted_upgrade" for upgrades purchased after
         * the gift was sent, or "offer" for gifts bought or sold through gift purchase
         * offers
         * @var string
         */
        public string $origin,
        /**
         * For gifts bought from other users, the currency in which the payment for the
         * gift was done. Currently, one of "XTR" for Telegram Stars or "TON" for toncoins.
         * @var string
         */
        public ?string $last_resale_currency,
        /**
         * For gifts bought from other users, the price paid for the gift in either
         * Telegram Stars or nanotoncoins
         * @var int
         */
        public ?int $last_resale_amount,
        /**
         * Unique identifier of the received gift for the bot; only present for gifts
         * received on behalf of business accounts
         * @var string
         */
        public ?string $owned_gift_id,
        /**
         * Number of Telegram Stars that must be paid to transfer the gift; omitted if the
         * bot cannot transfer the gift
         * @var int
         */
        public ?int $transfer_star_count,
        /**
         * Point in time (Unix timestamp) when the gift can be transferred. If it is in the
         * past, then the gift can be transferred now
         * @var int
         */
        public ?int $next_transfer_date,
    ) {
    }
}
