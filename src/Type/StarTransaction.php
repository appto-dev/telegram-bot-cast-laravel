<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\TransactionPartnerCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class StarTransaction extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string  Unique identifier of the transaction. Coincides with the identifier of the original
         * transaction for refund transactions. Coincides with SuccessfulPayment.telegram_payment_charge_id for
         * successful incoming payments from users.
         */
        public string $id,
        /** @var  int  Integer amount of Telegram Stars transferred by the transaction */
        public int $amount,
        /**
         * @var  int|null  The number of 1/1000000000 shares of Telegram Stars transferred by the transaction;
         * from 0 to 999999999
         */
        public ?int $nanostar_amount,
        /** @var  int  Date the transaction was created in Unix time */
        public int $date,
        /**
         * @var  TransactionPartner|null  Source of an incoming transaction (e.g., a user purchasing goods or
         * services, Fragment refunding a failed withdrawal). Only for incoming transactions.
         */
        #[WithCast(TransactionPartnerCast::class)]
        public ?TransactionPartner $source,
        /**
         * @var  TransactionPartner|null  Receiver of an outgoing transaction (e.g., a user for a purchase
         * refund, Fragment for a withdrawal). Only for outgoing transactions.
         */
        #[WithCast(TransactionPartnerCast::class)]
        public ?TransactionPartner $receiver,
    ) {
    }
}
