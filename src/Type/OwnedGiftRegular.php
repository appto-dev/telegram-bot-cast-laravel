<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class OwnedGiftRegular extends Data implements TelegramType, OwnedGift
{
    public function __construct(
        /** @var  string  Type of the gift, always "regular" */
        public string $type,
        /** @var  Gift  Information about the regular gift */
        public Gift $gift,
        /**
         * @var  string|null  Unique identifier of the gift for the bot; for gifts received on behalf of
         * business accounts only
         */
        public ?string $owned_gift_id,
        /** @var  User|null  Sender of the gift if it is a known user */
        public ?User $sender_user,
        /** @var  int  Date the gift was sent in Unix time */
        public int $send_date,
        /** @var  string|null  Text of the message that was added to the gift */
        public ?string $text,
        /** @var  MessageEntity[]|null  Special entities that appear in the text */
        public ?array $entities,
        /**
         * @var  true|null  True, if the sender and gift text are shown only to the gift receiver; otherwise,
         * everyone will be able to see them
         */
        public ?true $is_private,
        /**
         * @var  true|null  True, if the gift is displayed on the account's profile page; for gifts received on
         * behalf of business accounts only
         */
        public ?true $is_saved,
        /**
         * @var  true|null  True, if the gift can be upgraded to a unique gift; for gifts received on behalf of
         * business accounts only
         */
        public ?true $can_be_upgraded,
        /** @var  true|null  True, if the gift was refunded and isn't available anymore */
        public ?true $was_refunded,
        /**
         * @var  int|null  Number of Telegram Stars that can be claimed by the receiver instead of the gift;
         * omitted if the gift cannot be converted to Telegram Stars; for gifts received on behalf of business
         * accounts only
         */
        public ?int $convert_star_count,
        /** @var  int|null  Number of Telegram Stars that were paid for the ability to upgrade the gift */
        public ?int $prepaid_upgrade_star_count,
        /**
         * @var  true|null  True, if the gift's upgrade was purchased after the gift was sent; for gifts
         * received on behalf of business accounts only
         */
        public ?true $is_upgrade_separate,
        /**
         * @var  int|null  Unique number reserved for this gift when upgraded. See the number field in
         * UniqueGift.
         */
        public ?int $unique_gift_number,
    ) {
    }
}
