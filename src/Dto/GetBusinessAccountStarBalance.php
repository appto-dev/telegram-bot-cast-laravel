<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Returns the amount of Telegram Stars owned by a managed business account. Requires the <em>can_view_gifts_and_stars</em>
 * business bot right. Returns <a href="https://core.telegram.org/bots/api#staramount">StarAmount</a> on success.
 */
final class GetBusinessAccountStarBalance extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
    ) {
    }
}
