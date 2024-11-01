<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object contains information about an incoming pre-checkout query.
 *
 * @version Telegram Bot API 7.11
 */
final class PreCheckoutQuery extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique query identifier
         * @var string
         */
        public string $id,
        /**
         * User who sent the query
         * @var User
         */
        public User $from,
        /**
         * Three-letter ISO 4217 currency code, or "XTR" for payments in Telegram Stars
         * @var string
         */
        public string $currency,
        /**
         * Total price in the smallest units of the currency (integer, not float/double).
         * For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in
         * currencies.json, it shows the number of digits past the decimal point for each
         * currency (2 for the majority of currencies).
         * @var int
         */
        public int $total_amount,
        /**
         * Bot-specified invoice payload
         * @var string
         */
        public string $invoice_payload,
        /**
         * Identifier of the shipping option chosen by the user
         * @var string
         */
        public ?string $shipping_option_id,
        /**
         * Order information provided by the user
         * @var OrderInfo
         */
        public ?OrderInfo $order_info,
    ) {
    }
}
