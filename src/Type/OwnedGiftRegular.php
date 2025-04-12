<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a regular gift owned by a user or a chat.
 */
final class OwnedGiftRegular extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the gift, always "regular"
         * @var string
         */
        public string $type,
        /**
         * Information about the regular gift
         * @var Gift
         */
        public Gift $gift,
        /**
         * Unique identifier of the gift for the bot; for gifts received on behalf of
         * business accounts only
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
         * Text of the message that was added to the gift
         * @var string
         */
        public ?string $text,
        /**
         * Special entities that appear in the text
         * @var MessageEntity[]
         */
        public ?array $entities,
        /**
         * True, if the sender and gift text are shown only to the gift receiver;
         * otherwise, everyone will be able to see them
         * @var true
         */
        public ?true $is_private,
        /**
         * True, if the gift is displayed on the account's profile page; for gifts received
         * on behalf of business accounts only
         * @var true
         */
        public ?true $is_saved,
        /**
         * True, if the gift can be upgraded to a unique gift; for gifts received on behalf
         * of business accounts only
         * @var true
         */
        public ?true $can_be_upgraded,
        /**
         * True, if the gift was refunded and isn't available anymore
         * @var true
         */
        public ?true $was_refunded,
        /**
         * Number of Telegram Stars that can be claimed by the receiver instead of the
         * gift; omitted if the gift cannot be converted to Telegram Stars
         * @var int
         */
        public ?int $convert_star_count,
        /**
         * Number of Telegram Stars that were paid by the sender for the ability to upgrade
         * the gift
         * @var int
         */
        public ?int $prepaid_upgrade_star_count,
    ) {
    }
}
