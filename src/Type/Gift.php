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
         * The total number of the gifts of this type that can be sent; for limited gifts
         * only
         * @var int
         */
        public ?int $total_count,
        /**
         * The number of remaining gifts of this type that can be sent; for limited gifts
         * only
         * @var int
         */
        public ?int $remaining_count,
        /**
         * Information about the chat that published the gift
         * @var Chat
         */
        public ?Chat $publisher_chat,
    ) {
    }
}
