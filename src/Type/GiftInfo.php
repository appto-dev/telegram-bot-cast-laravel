<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class GiftInfo extends Data implements TelegramType
{
    public function __construct(
        /** @var  Gift  Information about the gift */
        public Gift $gift,
        /**
         * @var  string|null  Unique identifier of the received gift for the bot; only present for gifts
         * received on behalf of business accounts
         */
        public ?string $owned_gift_id,
        /**
         * @var  int|null  Number of Telegram Stars that can be claimed by the receiver by converting the gift;
         * omitted if conversion to Telegram Stars is impossible
         */
        public ?int $convert_star_count,
        /** @var  int|null  Number of Telegram Stars that were prepaid for the ability to upgrade the gift */
        public ?int $prepaid_upgrade_star_count,
        /** @var  true|null  True, if the gift's upgrade was purchased after the gift was sent */
        public ?true $is_upgrade_separate,
        /** @var  true|null  True, if the gift can be upgraded to a unique gift */
        public ?true $can_be_upgraded,
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
         * @var  int|null  Unique number reserved for this gift when upgraded. See the number field in
         * UniqueGift.
         */
        public ?int $unique_gift_number,
    ) {
    }
}
