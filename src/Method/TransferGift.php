<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Transfers an owned unique gift to another user. Requires the
 * <em>can_transfer_and_upgrade_gifts</em> business bot right. Requires
 * <em>can_transfer_stars</em> business bot right if the transfer is paid. Returns
 * <em>True</em> on success.
 */
final class TransferGift extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * Unique identifier of the regular gift that should be transferred
         * @var string
         */
        public string $owned_gift_id,
        /**
         * Unique identifier of the chat which will own the gift. The chat must be active
         * in the last 24 hours.
         * @var int
         */
        public int $new_owner_chat_id,
        /**
         * The amount of Telegram Stars that will be paid for the transfer from the
         * business account balance. If positive, then the <em>can_transfer_stars</em>
         * business bot right is required.
         * @var int
         */
        public ?int $star_count,
    ) {
    }
}
