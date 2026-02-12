<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about a regular gift that was sent or received.
 */
final class GiftInfo extends Data implements TelegramBotData
{
    public function __construct(
        /** Information about the gift */
        public Gift $gift,
        /**
         * Unique identifier of the received gift for the bot; only present for gifts
         * received on behalf of business accounts
         */
        public ?string $owned_gift_id,
        /**
         * Number of Telegram Stars that can be claimed by the receiver by converting the
         * gift; omitted if conversion to Telegram Stars is impossible
         */
        public ?int $convert_star_count,
        /** Number of Telegram Stars that were prepaid for the ability to upgrade the gift */
        public ?int $prepaid_upgrade_star_count,
        /** True, if the gift's upgrade was purchased after the gift was sent */
        public ?true $is_upgrade_separate,
        /** True, if the gift can be upgraded to a unique gift */
        public ?true $can_be_upgraded,
        /** Text of the message that was added to the gift */
        public ?string $text,
        /** Special entities that appear in the text */
        public ?MessageEntity $entities,
        /**
         * True, if the sender and gift text are shown only to the gift receiver;
         * otherwise, everyone will be able to see them
         */
        public ?true $is_private,
        /**
         * Unique number reserved for this gift when upgraded. See the number field in
         * UniqueGift
         */
        public ?int $unique_gift_number,
    ) {
    }
}
