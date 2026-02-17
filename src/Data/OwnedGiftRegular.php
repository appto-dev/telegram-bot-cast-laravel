<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\OwnedGift;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a regular gift owned by a user or a chat.
 */
final class OwnedGiftRegular extends Data implements TelegramBotData, OwnedGift
{
    public function __construct(
        /** Type of the gift, always "regular" */
        public string $type,
        /** Information about the regular gift */
        public Gift $gift,
        /** Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only */
        public ?string $owned_gift_id,
        /** Sender of the gift if it is a known user */
        public ?User $sender_user,
        /** Date the gift was sent in Unix time */
        public int $send_date,
        /** Text of the message that was added to the gift */
        public ?string $text,
        /** Special entities that appear in the text */
        public ?MessageEntity $entities,
        /**
         * True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see
         * them
         */
        public ?true $is_private,
        /**
         * True, if the gift is displayed on the account's profile page; for gifts received on behalf of business
         * accounts only
         */
        public ?true $is_saved,
        /** True, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only */
        public ?true $can_be_upgraded,
        /** True, if the gift was refunded and isn't available anymore */
        public ?true $was_refunded,
        /**
         * Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot
         * be converted to Telegram Stars; for gifts received on behalf of business accounts only
         */
        public ?int $convert_star_count,
        /** Number of Telegram Stars that were paid for the ability to upgrade the gift */
        public ?int $prepaid_upgrade_star_count,
        /**
         * True, if the gift's upgrade was purchased after the gift was sent; for gifts received on behalf of business
         * accounts only
         */
        public ?true $is_upgrade_separate,
        /** Unique number reserved for this gift when upgraded. See the number field in UniqueGift */
        public ?int $unique_gift_number,
    ) {
    }
}
