<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Changes the username of a managed business account. Requires the <em>can_change_username</em> business bot
 * right. Returns <em>True</em> on success.
 */
final class SetBusinessAccountUsername extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /** The new value of the username for the business account; 0-32 characters */
        public ?string $username,
    ) {
    }
}
