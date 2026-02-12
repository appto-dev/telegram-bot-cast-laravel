<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a gift that can be sent by the bot.
 */
final class Gift extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique identifier of the gift */
        public string $id,
        /** The sticker that represents the gift */
        public Sticker $sticker,
        /** The number of Telegram Stars that must be paid to send the sticker */
        public int $star_count,
        /**
         * The number of Telegram Stars that must be paid to upgrade the gift to a unique
         * one
         */
        public ?int $upgrade_star_count,
        /** True, if the gift can only be purchased by Telegram Premium subscribers */
        public ?true $is_premium,
        /**
         * True, if the gift can be used (after being upgraded) to customize a user's
         * appearance
         */
        public ?true $has_colors,
        /**
         * The total number of gifts of this type that can be sent by all users; for
         * limited gifts only
         */
        public ?int $total_count,
        /**
         * The number of remaining gifts of this type that can be sent by all users; for
         * limited gifts only
         */
        public ?int $remaining_count,
        /**
         * The total number of gifts of this type that can be sent by the bot; for limited
         * gifts only
         */
        public ?int $personal_total_count,
        /**
         * The number of remaining gifts of this type that can be sent by the bot; for
         * limited gifts only
         */
        public ?int $personal_remaining_count,
        /** Background of the gift */
        public ?GiftBackground $background,
        /**
         * The total number of different unique gifts that can be obtained by upgrading the
         * gift
         */
        public ?int $unique_gift_variant_count,
        /** Information about the chat that published the gift */
        public ?Chat $publisher_chat,
    ) {
    }
}
