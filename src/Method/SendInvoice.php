<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\LabeledPrice;
use Appto\TelegramBot\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * Use this method to send invoices. On success, the sent <a
 * href="#message">Message</a> is returned.
 *
 * @version Telegram Bot API 7.10
 */
final class SendInvoice extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format @channelusername)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum
         * supergroups only
         * @var int
         */
        public ?int $message_thread_id,
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
         * @var string
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
         * @var LabeledPrice[]
         */
        public array $prices,
        /**
         * The maximum accepted amount for tips in the smallest units of the currency
         * (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass
         * max_tip_amount = 145. See the exp parameter in currencies.json, it shows the
         * number of digits past the decimal point for each currency (2 for the majority of
         * currencies). Defaults to 0. Not supported for payments in Telegram Stars.
         * @var int
         */
        public ?int $max_tip_amount,
        /**
         * A JSON-serialized array of suggested amounts of tips in the smallest units of
         * the currency (integer, not float/double). At most 4 suggested tip amounts can be
         * specified. The suggested tip amounts must be positive, passed in a strictly
         * increased order and must not exceed max_tip_amount.
         * @var int[]
         */
        public ?array $suggested_tip_amounts,
        /**
         * Unique deep-linking parameter. If left empty, forwarded copies of the sent
         * message will have a Pay button, allowing multiple users to pay directly from the
         * forwarded message, using the same invoice. If non-empty, forwarded copies of the
         * sent message will have a URL button with a deep link to the bot (instead of a
         * Pay button), with the value used as the start parameter
         * @var string
         */
        public ?string $start_parameter,
        /**
         * JSON-serialized data about the invoice, which will be shared with the payment
         * provider. A detailed description of required fields should be provided by the
         * payment provider.
         * @var string
         */
        public ?string $provider_data,
        /**
         * URL of the product photo for the invoice. Can be a photo of the goods or a
         * marketing image for a service. People like it better when they see what they are
         * paying for.
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
         * Pass True if you require the user's full name to complete the order. Ignored for
         * payments in Telegram Stars.
         * @var bool
         */
        public ?bool $need_name,
        /**
         * Pass True if you require the user's phone number to complete the order. Ignored
         * for payments in Telegram Stars.
         * @var bool
         */
        public ?bool $need_phone_number,
        /**
         * Pass True if you require the user's email address to complete the order. Ignored
         * for payments in Telegram Stars.
         * @var bool
         */
        public ?bool $need_email,
        /**
         * Pass True if you require the user's shipping address to complete the order.
         * Ignored for payments in Telegram Stars.
         * @var bool
         */
        public ?bool $need_shipping_address,
        /**
         * Pass True if the user's phone number should be sent to the provider. Ignored for
         * payments in Telegram Stars.
         * @var bool
         */
        public ?bool $send_phone_number_to_provider,
        /**
         * Pass True if the user's email address should be sent to the provider. Ignored
         * for payments in Telegram Stars.
         * @var bool
         */
        public ?bool $send_email_to_provider,
        /**
         * Pass True if the final price depends on the shipping method. Ignored for
         * payments in Telegram Stars.
         * @var bool
         */
        public ?bool $is_flexible,
        /**
         * Sends the message silently. Users will receive a notification with no sound.
         * @var bool
         */
        public ?bool $disable_notification,
        /**
         * Protects the contents of the sent message from forwarding and saving
         * @var bool
         */
        public ?bool $protect_content,
        /**
         * Unique identifier of the message effect to be added to the message; for private
         * chats only
         * @var string
         */
        public ?string $message_effect_id,
        /**
         * Description of the message to reply to
         * @var ReplyParameters
         */
        public ?ReplyParameters $reply_parameters,
        /**
         * A JSON-serialized object for an inline keyboard. If empty, one 'Pay total price'
         * button will be shown. If not empty, the first button must be a Pay button.
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
