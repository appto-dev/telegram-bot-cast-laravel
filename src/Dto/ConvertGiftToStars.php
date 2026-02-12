<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Converts a given regular gift to Telegram Stars. Requires the
 * <em>can_convert_gifts_to_stars</em> business bot right. Returns <em>True</em> on
 * success.
 */
final class ConvertGiftToStars extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /** Unique identifier of the regular gift that should be converted to Telegram Stars */
        public string $owned_gift_id,
    ) {
    }
}
