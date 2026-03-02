<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\OwnedGift;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a unique gift received and owned by a user or a chat.
 */
final class OwnedGiftUnique extends Data implements TelegramBotData, OwnedGift
{
    public function __construct(
        /** Type of the gift, always "unique" */
        public string $type,
        /** Information about the unique gift */
        public UniqueGift $gift,
        /** Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only */
        public ?string $owned_gift_id,
        /** Sender of the gift if it is a known user */
        public ?User $sender_user,
        /** Date the gift was sent in Unix time */
        public int $send_date,
        /**
         * True, if the gift is displayed on the account's profile page; for gifts received on behalf of business
         * accounts only
         */
        public ?true $is_saved,
        /** True, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only */
        public ?true $can_be_transferred,
        /** Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift */
        public ?int $transfer_star_count,
        /**
         * Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be
         * transferred now
         */
        public ?int $next_transfer_date,
    ) {
    }
}
