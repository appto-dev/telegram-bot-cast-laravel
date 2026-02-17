<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Transfers Telegram Stars from the business account balance to the bot's balance. Requires the
 * <em>can_transfer_stars</em> business bot right. Returns <em>True</em> on success.
 */
final class TransferBusinessAccountStars extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /** Number of Telegram Stars to transfer; 1-10000 */
        public int $star_count,
    ) {
    }
}
