<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RevenueWithdrawalState;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Interfaces\TransactionPartner;
use Spatie\LaravelData\Data;

/**
 * Describes a withdrawal transaction with Fragment.
 */
final class TransactionPartnerFragment extends Data implements TelegramBotData, TransactionPartner
{
    public function __construct(
        /** Type of the transaction partner, always "fragment" */
        public string $type,
        /** State of the transaction if the transaction is outgoing */
        public ?RevenueWithdrawalState $withdrawal_state,
    ) {
    }
}
