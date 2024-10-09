<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object contains basic information about a refunded payment.
 *
 * @version Telegram Bot API 7.10
 */
final class RefundedPayment extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Three-letter ISO 4217 currency code, or "XTR" for payments in Telegram Stars.
         * Currently, always "XTR"
         * @var string
         */
        public string $currency,
        /**
         * Total refunded price in the smallest units of the currency (integer, not
         * float/double). For example, for a price of US$ 1.45, total_amount = 145. See the
         * exp parameter in currencies.json, it shows the number of digits past the decimal
         * point for each currency (2 for the majority of currencies).
         * @var int
         */
        public int $total_amount,
        /**
         * Bot-specified invoice payload
         * @var string
         */
        public string $invoice_payload,
        /**
         * Telegram payment identifier
         * @var string
         */
        public string $telegram_payment_charge_id,
        /**
         * Provider payment identifier
         * @var string
         */
        public ?string $provider_payment_charge_id,
    ) {
    }
}
