<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Interfaces\TransactionPartner;
use Spatie\LaravelData\Data;

/**
 * Describes the affiliate program that issued the affiliate commission received via this transaction.
 */
final class TransactionPartnerAffiliateProgram extends Data implements TelegramBotData, TransactionPartner
{
    public function __construct(
        /** Type of the transaction partner, always "affiliate_program" */
        public string $type,
        /** Information about the bot that sponsored the affiliate program */
        public ?User $sponsor_user,
        /**
         * The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor
         * from referred users
         */
        public int $commission_per_mille,
    ) {
    }
}
