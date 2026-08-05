<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class UniqueGiftInfo extends Data implements TelegramType
{
    public function __construct(
        /** @var  UniqueGift  Information about the gift */
        public UniqueGift $gift,
        /**
         * @var  string  Origin of the gift. Currently, either "upgrade" for gifts upgraded from regular gifts,
         * "transfer" for gifts transferred from other users or channels, "resale" for gifts bought from other
         * users, "gifted_upgrade" for upgrades purchased after the gift was sent, or "offer" for gifts bought
         * or sold through gift purchase offers.
         */
        public string $origin,
        /**
         * @var  string|null  For gifts bought from other users, the currency in which the payment for the gift
         * was done. Currently, one of "XTR" for Telegram Stars or "TON" for TON grams.
         */
        public ?string $last_resale_currency,
        /**
         * @var  int|null  For gifts bought from other users, the price paid for the gift in either Telegram
         * Stars or nanograms
         */
        public ?int $last_resale_amount,
        /**
         * @var  string|null  Unique identifier of the received gift for the bot; only present for gifts
         * received on behalf of business accounts
         */
        public ?string $owned_gift_id,
        /**
         * @var  int|null  Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot
         * cannot transfer the gift
         */
        public ?int $transfer_star_count,
        /**
         * @var  int|null  Point in time (Unix timestamp) when the gift can be transferred. If it is in the
         * past, then the gift can be transferred now.
         */
        public ?int $next_transfer_date,
    ) {
    }
}
