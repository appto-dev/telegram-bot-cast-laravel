<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a Telegram Star transaction.
 */
final class StarTransaction extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier of the transaction. Coincides with the identifier of the
         * original transaction for refund transactions. Coincides with
         * SuccessfulPayment.telegram_payment_charge_id for successful incoming payments
         * from users.
         * @var string
         */
        public string $id,
        /**
         * Integer amount of Telegram Stars transferred by the transaction
         * @var int
         */
        public int $amount,
        /**
         * The number of 1/1000000000 shares of Telegram Stars transferred by the
         * transaction; from 0 to 999999999
         * @var int
         */
        public ?int $nanostar_amount,
        /**
         * Date the transaction was created in Unix time
         * @var int
         */
        public int $date,
        /**
         * Source of an incoming transaction (e.g., a user purchasing goods or services,
         * Fragment refunding a failed withdrawal). Only for incoming transactions
         * @var TransactionPartner
         */
        public ?TransactionPartner $source,
        /**
         * Receiver of an outgoing transaction (e.g., a user for a purchase refund,
         * Fragment for a withdrawal). Only for outgoing transactions
         * @var TransactionPartner
         */
        public ?TransactionPartner $receiver,
    ) {
    }
}
