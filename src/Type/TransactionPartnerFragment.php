<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a withdrawal transaction with Fragment.
 *
 * @version Telegram Bot API 7.11
 */
final class TransactionPartnerFragment extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the transaction partner, always "fragment"
         * @var string
         */
        public string $type,
        /**
         * State of the transaction if the transaction is outgoing
         * @var RevenueWithdrawalState
         */
        public ?RevenueWithdrawalState $withdrawal_state,
    ) {
    }
}
