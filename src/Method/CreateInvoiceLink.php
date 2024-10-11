<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\LabeledPrice;
use Spatie\LaravelData\Data;

/**
 * Use this method to create a link for an invoice. Returns the created invoice
 * link as <em>String</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class CreateInvoiceLink extends Data implements TelegramMethodInterface
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
         * Payment provider token, obtained via <a
         * href="https://t.me/botfather">@BotFather</a>. Pass an empty string for payments
         * in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         * @var string
         */
        public ?string $provider_token,
        /**
         * Three-letter ISO 4217 currency code, see <a
         * href="/bots/payments#supported-currencies">more on currencies</a>. Pass "XTR"
         * for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         * @var string
         */
        public string $currency,
        /**
         * Price breakdown, a JSON-serialized list of components (e.g. product price, tax,
         * discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one
         * item for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         * @var LabeledPrice[]
         */
        public array $prices,
        /**
         * The maximum accepted amount for tips in the <em>smallest units</em> of the
         * currency (integer, <strong>not</strong> float/double). For example, for a
         * maximum tip of <code>US$ 1.45</code> pass <code>max_tip_amount = 145</code>. See
         * the <em>exp</em> parameter in <a
         * href="/bots/payments/currencies.json">currencies.json</a>, it shows the number
         * of digits past the decimal point for each currency (2 for the majority of
         * currencies). Defaults to 0. Not supported for payments in <a
         * href="https://t.me/BotNews/90">Telegram Stars</a>.
         * @var int
         */
        public ?int $max_tip_amount,
        /**
         * A JSON-serialized array of suggested amounts of tips in the <em>smallest
         * units</em> of the currency (integer, <strong>not</strong> float/double). At most
         * 4 suggested tip amounts can be specified. The suggested tip amounts must be
         * positive, passed in a strictly increased order and must not exceed
         * <em>max_tip_amount</em>.
         * @var int[]
         */
        public ?array $suggested_tip_amounts,
        /**
         * JSON-serialized data about the invoice, which will be shared with the payment
         * provider. A detailed description of required fields should be provided by the
         * payment provider.
         * @var string
         */
        public ?string $provider_data,
        /**
         * URL of the product photo for the invoice. Can be a photo of the goods or a
         * marketing image for a service.
         * @var string
         */
        public ?string $photo_url,
        /**
         * Photo size in bytes
         * @var int
         */
        public ?int $photo_size,
        /**
         * Photo width
         * @var int
         */
        public ?int $photo_width,
        /**
         * Photo height
         * @var int
         */
        public ?int $photo_height,
        /**
         * Pass <em>True</em> if you require the user's full name to complete the order.
         * Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         * @var bool
         */
        public ?bool $need_name,
        /**
         * Pass <em>True</em> if you require the user's phone number to complete the order.
         * Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         * @var bool
         */
        public ?bool $need_phone_number,
        /**
         * Pass <em>True</em> if you require the user's email address to complete the
         * order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram
         * Stars</a>.
         * @var bool
         */
        public ?bool $need_email,
        /**
         * Pass <em>True</em> if you require the user's shipping address to complete the
         * order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram
         * Stars</a>.
         * @var bool
         */
        public ?bool $need_shipping_address,
        /**
         * Pass <em>True</em> if the user's phone number should be sent to the provider.
         * Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         * @var bool
         */
        public ?bool $send_phone_number_to_provider,
        /**
         * Pass <em>True</em> if the user's email address should be sent to the provider.
         * Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         * @var bool
         */
        public ?bool $send_email_to_provider,
        /**
         * Pass <em>True</em> if the final price depends on the shipping method. Ignored
         * for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         * @var bool
         */
        public ?bool $is_flexible,
    ) {
    }
}
