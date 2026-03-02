<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\AcceptedGiftTypes;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Changes the privacy settings pertaining to incoming gifts in a managed business account. Requires the
 * <em>can_change_gift_settings</em> business bot right. Returns <em>True</em> on success.
 */
final class SetBusinessAccountGiftSettings extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /**
         * Pass <em>True</em>, if a button for sending a gift to the user or by the business account must always be shown
         * in the input field
         */
        public bool $show_gift_button,
        /** Types of gifts accepted by the business account */
        public AcceptedGiftTypes $accepted_gift_types,
    ) {
    }
}
