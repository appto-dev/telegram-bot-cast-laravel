<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class Gift extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Unique identifier of the gift */
        public string $id,
        /** @var  Sticker  The sticker that represents the gift */
        public Sticker $sticker,
        /** @var  int  The number of Telegram Stars that must be paid to send the sticker */
        public int $star_count,
        /** @var  int|null  The number of Telegram Stars that must be paid to upgrade the gift to a unique one */
        public ?int $upgrade_star_count,
        /** @var  true|null  True, if the gift can only be purchased by Telegram Premium subscribers */
        public ?true $is_premium,
        /**
         * @var  true|null  True, if the gift can be used (after being upgraded) to customize a user's
         * appearance
         */
        public ?true $has_colors,
        /**
         * @var  int|null  The total number of gifts of this type that can be sent by all users; for limited
         * gifts only
         */
        public ?int $total_count,
        /**
         * @var  int|null  The number of remaining gifts of this type that can be sent by all users; for
         * limited gifts only
         */
        public ?int $remaining_count,
        /**
         * @var  int|null  The total number of gifts of this type that can be sent by the bot; for limited
         * gifts only
         */
        public ?int $personal_total_count,
        /**
         * @var  int|null  The number of remaining gifts of this type that can be sent by the bot; for limited
         * gifts only
         */
        public ?int $personal_remaining_count,
        /** @var  GiftBackground|null  Background of the gift */
        public ?GiftBackground $background,
        /**
         * @var  int|null  The total number of different unique gifts that can be obtained by upgrading the
         * gift
         */
        public ?int $unique_gift_variant_count,
        /** @var  Chat|null  Information about the chat that published the gift */
        public ?Chat $publisher_chat,
    ) {
    }
}
