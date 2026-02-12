<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to send invoices. On success, the sent <a
 * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
 */
final class SendInvoice extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of a forum; for forum
         * supergroups and private chats of bots with forum topic mode enabled only
         */
        public ?int $message_thread_id,
        /**
         * Identifier of the direct messages topic to which the message will be sent;
         * required if the message is sent to a direct messages chat
         */
        public ?int $direct_messages_topic_id,
        /** Product name, 1-32 characters */
        public string $title,
        /** Product description, 1-255 characters */
        public string $description,
        /**
         * Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the
         * user, use it for your internal processes.
         */
        public string $payload,
        /**
         * Payment provider token, obtained via <a
         * href="https://t.me/botfather">@BotFather</a>. Pass an empty string for payments
         * in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?string $provider_token,
        /**
         * Three-letter ISO 4217 currency code, see <a
         * href="https://core.telegram.org/bots/payments#supported-currencies">more on
         * currencies</a>. Pass "XTR" for payments in <a
         * href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public string $currency,
        /**
         * Price breakdown, a JSON-serialized list of components (e.g. product price, tax,
         * discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one
         * item for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public LabeledPrice $prices,
        /**
         * The maximum accepted amount for tips in the <em>smallest units</em> of the
         * currency (integer, <strong>not</strong> float/double). For example, for a
         * maximum tip of <code>US$ 1.45</code> pass <code>max_tip_amount = 145</code>. See
         * the <em>exp</em> parameter in <a
         * href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>,
         * it shows the number of digits past the decimal point for each currency (2 for
         * the majority of currencies). Defaults to 0. Not supported for payments in <a
         * href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?int $max_tip_amount,
        /**
         * A JSON-serialized array of suggested amounts of tips in the <em>smallest
         * units</em> of the currency (integer, <strong>not</strong> float/double). At most
         * 4 suggested tip amounts can be specified. The suggested tip amounts must be
         * positive, passed in a strictly increased order and must not exceed
         * <em>max_tip_amount</em>.
         */
        public ?array $suggested_tip_amounts,
        /**
         * Unique deep-linking parameter. If left empty, <strong>forwarded copies</strong>
         * of the sent message will have a <em>Pay</em> button, allowing multiple users to
         * pay directly from the forwarded message, using the same invoice. If non-empty,
         * forwarded copies of the sent message will have a <em>URL</em> button with a deep
         * link to the bot (instead of a <em>Pay</em> button), with the value used as the
         * start parameter
         */
        public ?string $start_parameter,
        /**
         * JSON-serialized data about the invoice, which will be shared with the payment
         * provider. A detailed description of required fields should be provided by the
         * payment provider.
         */
        public ?string $provider_data,
        /**
         * URL of the product photo for the invoice. Can be a photo of the goods or a
         * marketing image for a service. People like it better when they see what they are
         * paying for.
         */
        public ?string $photo_url,
        /** Photo size in bytes */
        public ?int $photo_size,
        /** Photo width */
        public ?int $photo_width,
        /** Photo height */
        public ?int $photo_height,
        /**
         * Pass <em>True</em> if you require the user's full name to complete the order.
         * Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?bool $need_name,
        /**
         * Pass <em>True</em> if you require the user's phone number to complete the order.
         * Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?bool $need_phone_number,
        /**
         * Pass <em>True</em> if you require the user's email address to complete the
         * order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram
         * Stars</a>.
         */
        public ?bool $need_email,
        /**
         * Pass <em>True</em> if you require the user's shipping address to complete the
         * order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram
         * Stars</a>.
         */
        public ?bool $need_shipping_address,
        /**
         * Pass <em>True</em> if the user's phone number should be sent to the provider.
         * Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?bool $send_phone_number_to_provider,
        /**
         * Pass <em>True</em> if the user's email address should be sent to the provider.
         * Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?bool $send_email_to_provider,
        /**
         * Pass <em>True</em> if the final price depends on the shipping method. Ignored
         * for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
         */
        public ?bool $is_flexible,
        /**
         * Sends the message <a
         * href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>.
         * Users will receive a notification with no sound.
         */
        public ?bool $disable_notification,
        /** Protects the contents of the sent message from forwarding and saving */
        public ?bool $protect_content,
        /**
         * Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a
         * href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting
         * limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will
         * be withdrawn from the bot's balance
         */
        public ?bool $allow_paid_broadcast,
        /**
         * Unique identifier of the message effect to be added to the message; for private
         * chats only
         */
        public ?string $message_effect_id,
        /**
         * A JSON-serialized object containing the parameters of the suggested post to
         * send; for direct messages chats only. If the message is sent as a reply to
         * another suggested post, then that suggested post is automatically declined.
         */
        public ?SuggestedPostParameters $suggested_post_parameters,
        /** Description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
        /**
         * A JSON-serialized object for an <a
         * href="https://core.telegram.org/bots/features#inline-keyboards">inline
         * keyboard</a>. If empty, one 'Pay <code>total price</code>' button will be shown.
         * If not empty, the first button must be a Pay button.
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
