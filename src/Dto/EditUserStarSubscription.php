<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Allows the bot to cancel or re-enable extension of a subscription paid in Telegram Stars. Returns
 * <em>True</em> on success.
 */
final class EditUserStarSubscription extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Identifier of the user whose subscription will be edited */
        public int $user_id,
        /** Telegram payment identifier for the subscription */
        public string $telegram_payment_charge_id,
        /**
         * Pass <em>True</em> to cancel extension of the user subscription; the subscription must be active up to the end
         * of the current subscription period. Pass <em>False</em> to allow the user to re-enable a subscription that was
         * previously canceled by the bot.
         */
        public bool $is_canceled,
    ) {
    }
}
