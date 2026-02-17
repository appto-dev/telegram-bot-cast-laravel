<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object contains basic information about a successful payment. Note that if the buyer initiates a
 * chargeback with the relevant payment provider following this transaction, the funds may be debited from your
 * balance. This is outside of Telegram's control.
 */
final class SuccessfulPayment extends Data implements TelegramBotData
{
    public function __construct(
        /** Three-letter ISO 4217 currency code, or "XTR" for payments in Telegram Stars */
        public string $currency,
        /**
         * Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$
         * 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the
         * decimal point for each currency (2 for the majority of currencies).
         */
        public int $total_amount,
        /** Bot-specified invoice payload */
        public string $invoice_payload,
        /** Expiration date of the subscription, in Unix time; for recurring payments only */
        public ?int $subscription_expiration_date,
        /** True, if the payment is a recurring payment for a subscription */
        public ?true $is_recurring,
        /** True, if the payment is the first payment for a subscription */
        public ?true $is_first_recurring,
        /** Identifier of the shipping option chosen by the user */
        public ?string $shipping_option_id,
        /** Order information provided by the user */
        public ?OrderInfo $order_info,
        /** Telegram payment identifier */
        public string $telegram_payment_charge_id,
        /** Provider payment identifier */
        public string $provider_payment_charge_id,
    ) {
    }
}
