<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\RevenueWithdrawalStateCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class TransactionPartnerFragment extends Data implements TelegramType, TransactionPartner
{
    public function __construct(
        /** @var  string  Type of the transaction partner, always "fragment" */
        public string $type,
        /** @var  RevenueWithdrawalState|null  State of the transaction if the transaction is outgoing */
        #[WithCast(RevenueWithdrawalStateCast::class)]
        public ?RevenueWithdrawalState $withdrawal_state,
    ) {
    }
}
