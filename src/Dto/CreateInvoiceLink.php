<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\LabeledPrice;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to create a link for an invoice. Returns the created invoice link as <em>String</em> on
 * success.
 */
final class CreateInvoiceLink extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the link will be created. For payments in <a
         * href="https://t.me/BotNews/90">Telegram Stars</a> only.
         */
        public ?string $business_connection_id,
        /** Product name, 1-32 characters */
        public string $title,
        /** Product description, 1-255 characters */
        public string $description,
        /**
         * Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal
         * processes.
         */
        public string $payload,
        /**
         * Payment provider token, obtained via <a href="https://t.me/botfather">@BotFather</a>. Pass an empty string for
         * payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?string $provider_token,
        /**
         * Three-letter ISO 4217 currency code, see <a href="/bots/payments#supported-currencies">more on currencies</a>.
         * Pass "XTR" for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public string $currency,
        /**
         * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost,
         * delivery tax, bonus, etc.). Must contain exactly one item for payments in <a
         * href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public LabeledPrice $prices,
        /**
         * The number of seconds the subscription will be active for before the next payment. The currency must be set to
         * "XTR" (Telegram Stars) if the parameter is used. Currently, it must always be 2592000 (30 days) if specified.
         * Any number of subscriptions can be active for a given bot at the same time, including multiple concurrent
         * subscriptions from the same user. Subscription price must no exceed 10000 Telegram Stars.
         */
        public ?int $subscription_period,
        /**
         * The maximum accepted amount for tips in the <em>smallest units</em> of the currency (integer,
         * <strong>not</strong> float/double). For example, for a maximum tip of <code>US$ 1.45</code> pass
         * <code>max_tip_amount = 145</code>. See the <em>exp</em> parameter in <a
         * href="/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal
         * point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in <a
         * href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?int $max_tip_amount,
        /**
         * A JSON-serialized array of suggested amounts of tips in the <em>smallest units</em> of the currency (integer,
         * <strong>not</strong> float/double). At most 4 suggested tip amounts can be specified. The suggested tip
         * amounts must be positive, passed in a strictly increased order and must not exceed <em>max_tip_amount</em>.
         */
        public ?array $suggested_tip_amounts,
        /**
         * JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description
         * of required fields should be provided by the payment provider.
         */
        public ?string $provider_data,
        /** URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. */
        public ?string $photo_url,
        /** Photo size in bytes */
        public ?int $photo_size,
        /** Photo width */
        public ?int $photo_width,
        /** Photo height */
        public ?int $photo_height,
        /**
         * Pass <em>True</em> if you require the user's full name to complete the order. Ignored for payments in <a
         * href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?bool $need_name,
        /**
         * Pass <em>True</em> if you require the user's phone number to complete the order. Ignored for payments in <a
         * href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?bool $need_phone_number,
        /**
         * Pass <em>True</em> if you require the user's email address to complete the order. Ignored for payments in <a
         * href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?bool $need_email,
        /**
         * Pass <em>True</em> if you require the user's shipping address to complete the order. Ignored for payments in
         * <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?bool $need_shipping_address,
        /**
         * Pass <em>True</em> if the user's phone number should be sent to the provider. Ignored for payments in <a
         * href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?bool $send_phone_number_to_provider,
        /**
         * Pass <em>True</em> if the user's email address should be sent to the provider. Ignored for payments in <a
         * href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?bool $send_email_to_provider,
        /**
         * Pass <em>True</em> if the final price depends on the shipping method. Ignored for payments in <a
         * href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?bool $is_flexible,
    ) {
    }
}
