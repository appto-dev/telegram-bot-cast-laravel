<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Describes a withdrawal transaction with Fragment.
 *
 * @version Telegram Bot API 7.10
 */
final class TransactionPartnerFragment extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the transaction partner, always "fragment"
         * @var string
         */
        public string $type,
        /**
         * State of the transaction if the transaction is outgoing
         * @var RevenueWithdrawalState|null
         */
        public ?RevenueWithdrawalState $withdrawal_state,
    ) {
    }
}
