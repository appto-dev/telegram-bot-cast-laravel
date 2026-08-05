<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class RefundedPayment extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string  Three-letter ISO 4217 currency code, or "XTR" for payments in Telegram Stars.
         * Currently, always "XTR".
         */
        public string $currency,
        /**
         * @var  int  Total refunded price in the smallest units of the currency (integer, not float/double).
         * For example, for a price of US$ 1.45, total_amount = 145. See the exp parameter in currencies.json,
         * it shows the number of digits past the decimal point for each currency (2 for the majority of
         * currencies).
         */
        public int $total_amount,
        /** @var  string  Bot-specified invoice payload */
        public string $invoice_payload,
        /** @var  string  Telegram payment identifier */
        public string $telegram_payment_charge_id,
        /** @var  string|null  Provider payment identifier */
        public ?string $provider_payment_charge_id,
    ) {
    }
}
