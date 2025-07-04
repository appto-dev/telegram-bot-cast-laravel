<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a unique gift received and owned by a user or a chat.
 */
final class OwnedGiftUnique extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the gift, always "unique"
         * @var string
         */
        public string $type,
        /**
         * Information about the unique gift
         * @var UniqueGift
         */
        public UniqueGift $gift,
        /**
         * Unique identifier of the received gift for the bot; for gifts received on behalf
         * of business accounts only
         * @var string
         */
        public ?string $owned_gift_id,
        /**
         * Sender of the gift if it is a known user
         * @var User
         */
        public ?User $sender_user,
        /**
         * Date the gift was sent in Unix time
         * @var int
         */
        public int $send_date,
        /**
         * True, if the gift is displayed on the account's profile page; for gifts received
         * on behalf of business accounts only
         * @var true
         */
        public ?true $is_saved,
        /**
         * True, if the gift can be transferred to another owner; for gifts received on
         * behalf of business accounts only
         * @var true
         */
        public ?true $can_be_transferred,
        /**
         * Number of Telegram Stars that must be paid to transfer the gift; omitted if the
         * bot cannot transfer the gift
         * @var int
         */
        public ?int $transfer_star_count,
        /**
         * Point in time (Unix timestamp) when the gift can be transferred. If it is in the
         * past, then the gift can be transferred now
         * @var int
         */
        public ?int $next_transfer_date,
    ) {
    }
}
