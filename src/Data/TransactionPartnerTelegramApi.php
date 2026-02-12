<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Interfaces\TransactionPartner;
use Spatie\LaravelData\Data;

/**
 * Describes a transaction with payment for <a
 * href="https://core.telegram.org/bots/api#paid-broadcasts">paid broadcasting</a>.
 */
final class TransactionPartnerTelegramApi extends Data implements TelegramBotData, TransactionPartner
{
    public function __construct(
        /** Type of the transaction partner, always "telegram_api" */
        public string $type,
        /**
         * The number of successful requests that exceeded regular limits and were
         * therefore billed
         */
        public int $request_count,
    ) {
    }
}
