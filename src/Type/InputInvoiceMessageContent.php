<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to work in
 * <a href="/bots/inline">inline mode</a>.Please see our
 * <a href="/bots/inline">Introduction to Inline bots</a> for more details.
 * To enable this option, send the /setinline command to
 * <a href="https://t.me/botfather">@BotFather</a> and provide the placeholder text that the user will
 * see in the input field after typing your bot's name.
 */
class InputInvoiceMessageContent extends Data implements TelegramType, InputMessageContent
{
    public function __construct(
        /** @var  string  Product name, 1-32 characters */
        public string $title,
        /** @var  string  Product description, 1-255 characters */
        public string $description,
        /**
         * @var  string  Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use
         * it for your internal processes.
         */
        public string $payload,
        /**
         * @var  string|null  Payment provider token, obtained via @BotFather. Pass an empty string for
         * payments in Telegram Stars.
         */
        public ?string $provider_token,
        /**
         * @var  string  Three-letter ISO 4217 currency code, see more on currencies. Pass "XTR" for payments
         * in Telegram Stars.
         */
        public string $currency,
        /**
         * @var  LabeledPrice[]  Price breakdown, a JSON-serialized list of components (e.g. product price,
         * tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments
         * in Telegram Stars.
         */
        public array $prices,
        /**
         * @var  int|null  The maximum accepted amount for tips in the smallest units of the currency (integer,
         * not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp
         * parameter in currencies.json, it shows the number of digits past the decimal point for each currency
         * (2 for the majority of currencies). Defaults to 0. Not supported for payments in Telegram Stars.
         */
        public ?int $max_tip_amount,
        /**
         * @var  int[]|null  A JSON-serialized Array of suggested amounts of tip in the smallest units of the
         * currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The
         * suggested tip amounts must be positive, passed in a strictly increased order and must not exceed
         * max_tip_amount.
         */
        public ?array $suggested_tip_amounts,
        /**
         * @var  string|null  A JSON-serialized object for data about the invoice, which will be shared with
         * the payment provider. A detailed description of the required fields should be provided by the
         * payment provider.
         */
        public ?string $provider_data,
        /**
         * @var  string|null  URL of the product photo for the invoice. Can be a photo of the goods or a
         * marketing image for a service.
         */
        public ?string $photo_url,
        /** @var  int|null  Photo size in bytes */
        public ?int $photo_size,
        /** @var  int|null  Photo width */
        public ?int $photo_width,
        /** @var  int|null  Photo height */
        public ?int $photo_height,
        /**
         * @var  bool|null  Pass True if you require the user's full name to complete the order. Ignored for
         * payments in Telegram Stars.
         */
        public ?bool $need_name,
        /**
         * @var  bool|null  Pass True if you require the user's phone number to complete the order. Ignored for
         * payments in Telegram Stars.
         */
        public ?bool $need_phone_number,
        /**
         * @var  bool|null  Pass True if you require the user's email address to complete the order. Ignored
         * for payments in Telegram Stars.
         */
        public ?bool $need_email,
        /**
         * @var  bool|null  Pass True if you require the user's shipping address to complete the order. Ignored
         * for payments in Telegram Stars.
         */
        public ?bool $need_shipping_address,
        /**
         * @var  bool|null  Pass True if the user's phone number should be sent to the provider. Ignored for
         * payments in Telegram Stars.
         */
        public ?bool $send_phone_number_to_provider,
        /**
         * @var  bool|null  Pass True if the user's email address should be sent to the provider. Ignored for
         * payments in Telegram Stars.
         */
        public ?bool $send_email_to_provider,
        /**
         * @var  bool|null  Pass True if the final price depends on the shipping method. Ignored for payments
         * in Telegram Stars.
         */
        public ?bool $is_flexible,
    ) {
    }
}
