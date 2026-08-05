<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class OwnedGiftUnique extends Data implements TelegramType, OwnedGift
{
    public function __construct(
        /** @var  string  Type of the gift, always "unique" */
        public string $type,
        /** @var  UniqueGift  Information about the unique gift */
        public UniqueGift $gift,
        /**
         * @var  string|null  Unique identifier of the received gift for the bot; for gifts received on behalf
         * of business accounts only
         */
        public ?string $owned_gift_id,
        /** @var  User|null  Sender of the gift if it is a known user */
        public ?User $sender_user,
        /** @var  int  Date the gift was sent in Unix time */
        public int $send_date,
        /**
         * @var  true|null  True, if the gift is displayed on the account's profile page; for gifts received on
         * behalf of business accounts only
         */
        public ?true $is_saved,
        /**
         * @var  true|null  True, if the gift can be transferred to another owner; for gifts received on behalf
         * of business accounts only
         */
        public ?true $can_be_transferred,
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
