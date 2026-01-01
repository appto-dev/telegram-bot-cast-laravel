<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a gift that can be sent by the bot.
 */
final class Gift extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier of the gift
         * @var string
         */
        public string $id,
        /**
         * The sticker that represents the gift
         * @var Sticker
         */
        public Sticker $sticker,
        /**
         * The number of Telegram Stars that must be paid to send the sticker
         * @var int
         */
        public int $star_count,
        /**
         * The number of Telegram Stars that must be paid to upgrade the gift to a unique
         * one
         * @var int
         */
        public ?int $upgrade_star_count,
        /**
         * True, if the gift can only be purchased by Telegram Premium subscribers
         * @var true
         */
        public ?true $is_premium,
        /**
         * True, if the gift can be used (after being upgraded) to customize a user's
         * appearance
         * @var true
         */
        public ?true $has_colors,
        /**
         * The total number of gifts of this type that can be sent by all users; for
         * limited gifts only
         * @var int
         */
        public ?int $total_count,
        /**
         * The number of remaining gifts of this type that can be sent by all users; for
         * limited gifts only
         * @var int
         */
        public ?int $remaining_count,
        /**
         * The total number of gifts of this type that can be sent by the bot; for limited
         * gifts only
         * @var int
         */
        public ?int $personal_total_count,
        /**
         * The number of remaining gifts of this type that can be sent by the bot; for
         * limited gifts only
         * @var int
         */
        public ?int $personal_remaining_count,
        /**
         * Background of the gift
         * @var GiftBackground
         */
        public ?GiftBackground $background,
        /**
         * The total number of different unique gifts that can be obtained by upgrading the
         * gift
         * @var int
         */
        public ?int $unique_gift_variant_count,
        /**
         * Information about the chat that published the gift
         * @var Chat
         */
        public ?Chat $publisher_chat,
    ) {
    }
}
