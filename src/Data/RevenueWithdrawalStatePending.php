<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RevenueWithdrawalState;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The withdrawal is in progress.
 */
final class RevenueWithdrawalStatePending extends Data implements TelegramBotData, RevenueWithdrawalState
{
    public function __construct(
        /** Type of the state, always "pending" */
        public string $type,
    ) {
    }
}
