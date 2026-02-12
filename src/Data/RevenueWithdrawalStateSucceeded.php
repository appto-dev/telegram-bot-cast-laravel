<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RevenueWithdrawalState;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The withdrawal succeeded.
 */
final class RevenueWithdrawalStateSucceeded extends Data implements TelegramBotData, RevenueWithdrawalState
{
    public function __construct(
        /** Type of the state, always "succeeded" */
        public string $type,
        /** Date the withdrawal was completed in Unix time */
        public int $date,
        /** An HTTPS URL that can be used to see transaction details */
        public string $url,
    ) {
    }
}
