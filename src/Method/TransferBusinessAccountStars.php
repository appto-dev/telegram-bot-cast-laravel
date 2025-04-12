<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Transfers Telegram Stars from the business account balance to the bot's balance.
 * Requires the <em>can_transfer_stars</em> business bot right. Returns
 * <em>True</em> on success.
 */
final class TransferBusinessAccountStars extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * Number of Telegram Stars to transfer; 1-10000
         * @var int
         */
        public int $star_count,
    ) {
    }
}
