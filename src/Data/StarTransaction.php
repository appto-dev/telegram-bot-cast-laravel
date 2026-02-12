<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Interfaces\TransactionPartner;
use Spatie\LaravelData\Data;

/**
 * Describes a Telegram Star transaction. Note that if the buyer initiates a
 * chargeback with the payment provider from whom they acquired Stars (e.g., Apple,
 * Google) following this transaction, the refunded Stars will be deducted from the
 * bot's balance. This is outside of Telegram's control.
 */
final class StarTransaction extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier of the transaction. Coincides with the identifier of the
         * original transaction for refund transactions. Coincides with
         * SuccessfulPayment.telegram_payment_charge_id for successful incoming payments
         * from users.
         */
        public string $id,
        /** Integer amount of Telegram Stars transferred by the transaction */
        public int $amount,
        /**
         * The number of 1/1000000000 shares of Telegram Stars transferred by the
         * transaction; from 0 to 999999999
         */
        public ?int $nanostar_amount,
        /** Date the transaction was created in Unix time */
        public int $date,
        /**
         * Source of an incoming transaction (e.g., a user purchasing goods or services,
         * Fragment refunding a failed withdrawal). Only for incoming transactions
         */
        public ?TransactionPartner $source,
        /**
         * Receiver of an outgoing transaction (e.g., a user for a purchase refund,
         * Fragment for a withdrawal). Only for outgoing transactions
         */
        public ?TransactionPartner $receiver,
    ) {
    }
}
