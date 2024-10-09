<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\LabeledPrice;
use Spatie\LaravelData\Data;

/**
 * Use this method to create a link for an invoice. Returns the created invoice
 * link as <em>String</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class CreateInvoiceLink extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Product name, 1-32 characters
         * @var string
         */
        public string $title,
        /**
         * Product description, 1-255 characters
         * @var string
         */
        public string $description,
        /**
         * Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the
         * user, use it for your internal processes.
         * @var string
         */
        public string $payload,
        /**
         * Payment provider token, obtained via @BotFather. Pass an empty string for
         * payments in Telegram Stars.
         * @var string|null
         */
        public ?string $provider_token,
        /**
         * Three-letter ISO 4217 currency code, see more on currencies. Pass "XTR" for
         * payments in Telegram Stars.
         * @var string
         */
        public string $currency,
        /**
         * Price breakdown, a JSON-serialized list of components (e.g. product price, tax,
         * discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one
         * item for payments in Telegram Stars.
         * @var LabeledPrice
         */
        public LabeledPrice $prices,
        /**
         * The maximum accepted amount for tips in the smallest units of the currency
         * (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass
         * max_tip_amount = 145. See the exp parameter in currencies.json, it shows the
         * number of digits past the decimal point for each currency (2 for the majority of
         * currencies). Defaults to 0. Not supported for payments in Telegram Stars.
         * @var int|null
         */
        public ?int $max_tip_amount,
        /**
         * A JSON-serialized array of suggested amounts of tips in the smallest units of
         * the currency (integer, not float/double). At most 4 suggested tip amounts can be
         * specified. The suggested tip amounts must be positive, passed in a strictly
         * increased order and must not exceed max_tip_amount.
         * @var int|null
         */
        public ?int $suggested_tip_amounts,
        /**
         * JSON-serialized data about the invoice, which will be shared with the payment
         * provider. A detailed description of required fields should be provided by the
         * payment provider.
         * @var string|null
         */
        public ?string $provider_data,
        /**
         * URL of the product photo for the invoice. Can be a photo of the goods or a
         * marketing image for a service.
         * @var string|null
         */
        public ?string $photo_url,
        /**
         * Photo size in bytes
         * @var int|null
         */
        public ?int $photo_size,
        /**
         * Photo width
         * @var int|null
         */
        public ?int $photo_width,
        /**
         * Photo height
         * @var int|null
         */
        public ?int $photo_height,
        /**
         * Pass True if you require the user's full name to complete the order. Ignored for
         * payments in Telegram Stars.
         * @var bool|null
         */
        public ?bool $need_name,
        /**
         * Pass True if you require the user's phone number to complete the order. Ignored
         * for payments in Telegram Stars.
         * @var bool|null
         */
        public ?bool $need_phone_number,
        /**
         * Pass True if you require the user's email address to complete the order. Ignored
         * for payments in Telegram Stars.
         * @var bool|null
         */
        public ?bool $need_email,
        /**
         * Pass True if you require the user's shipping address to complete the order.
         * Ignored for payments in Telegram Stars.
         * @var bool|null
         */
        public ?bool $need_shipping_address,
        /**
         * Pass True if the user's phone number should be sent to the provider. Ignored for
         * payments in Telegram Stars.
         * @var bool|null
         */
        public ?bool $send_phone_number_to_provider,
        /**
         * Pass True if the user's email address should be sent to the provider. Ignored
         * for payments in Telegram Stars.
         * @var bool|null
         */
        public ?bool $send_email_to_provider,
        /**
         * Pass True if the final price depends on the shipping method. Ignored for
         * payments in Telegram Stars.
         * @var bool|null
         */
        public ?bool $is_flexible,
    ) {
    }
}
