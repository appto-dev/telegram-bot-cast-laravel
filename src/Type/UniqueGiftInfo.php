<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about a unique gift that was sent or received.
 */
final class UniqueGiftInfo extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Information about the gift
         * @var UniqueGift
         */
        public UniqueGift $gift,
        /**
         * Origin of the gift. Currently, either "upgrade" or "transfer"
         * @var string
         */
        public string $origin,
        /**
         * Unique identifier of the received gift for the bot; only present for gifts
         * received on behalf of business accounts
         * @var string
         */
        public ?string $owned_gift_id,
        /**
         * Number of Telegram Stars that must be paid to transfer the gift; omitted if the
         * bot cannot transfer the gift
         * @var int
         */
        public ?int $transfer_star_count,
    ) {
    }
}
