<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RevenueWithdrawalState;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Interfaces\TransactionPartner;
use Appto\TelegramBot\Support\Resolvers\RevenueWithdrawalStateResolver;
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

    public static function prepareForPipeline(array $properties): array
    {
        if (!isset($properties['withdrawal_state']) || !$properties['withdrawal_state']) {
            return $properties;
        }

        $properties['withdrawal_state'] = (new RevenueWithdrawalStateResolver())
            ->resolve($properties['withdrawal_state']);

        return $properties;
    }
}
