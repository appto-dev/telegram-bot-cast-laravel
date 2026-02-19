<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object contains basic information about a refunded payment.
 */
final class RefundedPayment extends Data implements TelegramBotData
{
    public function __construct(
        /** Three-letter ISO 4217 currency code, or "XTR" for payments in Telegram Stars. Currently, always "XTR" */
        public string $currency,
        /**
         * Total refunded price in the smallest units of the currency (integer, not float/double). For example, for a price of US$
         * 1.45, total_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point
         * for each currency (2 for the majority of currencies).
         */
        public int $total_amount,
        /** Bot-specified invoice payload */
        public string $invoice_payload,
        /** Telegram payment identifier */
        public string $telegram_payment_charge_id,
        /** Provider payment identifier */
        public ?string $provider_payment_charge_id,
    ) {
    }
}
