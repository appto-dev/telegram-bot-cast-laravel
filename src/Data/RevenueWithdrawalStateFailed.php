<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RevenueWithdrawalState;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The withdrawal failed and the transaction was refunded.
 */
final class RevenueWithdrawalStateFailed extends Data implements TelegramBotData, RevenueWithdrawalState
{
    public function __construct(
        /** Type of the state, always "failed" */
        public string $type,
    ) {
    }
}
