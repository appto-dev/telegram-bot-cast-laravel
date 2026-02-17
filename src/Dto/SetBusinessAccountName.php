<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Changes the first and last name of a managed business account. Requires the <em>can_change_name</em> business
 * bot right. Returns <em>True</em> on success.
 */
final class SetBusinessAccountName extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /** The new value of the first name for the business account; 1-64 characters */
        public string $first_name,
        /** The new value of the last name for the business account; 0-64 characters */
        public ?string $last_name,
    ) {
    }
}
