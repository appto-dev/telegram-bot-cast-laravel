<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Support;

use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\LabeledPrice;
use Appto\TelegramBot\Type\Message;
use Appto\TelegramBot\Type\ReplyParameters;
use Appto\TelegramBot\Type\ShippingOption;
use Appto\TelegramBot\Type\StarAmount;
use Appto\TelegramBot\Type\StarTransactions;
use Appto\TelegramBot\Type\SuggestedPostParameters;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
interface Payments
{
    /**
     * Use this method to send invoices. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  string $title Product name, 1-32 characters
     * @param  string $description Product description, 1-255 characters
     * @param  string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the
     * user, use it for your internal processes.
     * @param  string $currency Three-letter ISO 4217 currency code, see
     * <a href="/bots/payments#supported-currencies">more on currencies</a>. Pass "XTR" for payments in
     * <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  LabeledPrice[] $prices Price breakdown, a JSON-serialized list of components (e.g. product
     * price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for
     * payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  string|null $provider_token Payment provider token, obtained via
     * <a href="https://t.me/botfather">@BotFather</a>. Pass an empty string for payments in
     * <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  int|null $max_tip_amount The maximum accepted amount for tips in the <em>smallest units</em>
     * of the currency (integer, <strong>not</strong> float/double). For example, for a maximum tip of
     * <code>US$ 1.45</code> pass <code>max_tip_amount = 145</code>. See the <em>exp</em> parameter in
     * <a href="/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the
     * decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for
     * payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  int[]|null $suggested_tip_amounts A JSON-serialized Array of suggested amounts of tips in
     * the <em>smallest units</em> of the currency (integer, <strong>not</strong> float/double). At most 4
     * suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a
     * strictly increased order and must not exceed <em>max_tip_amount</em>.
     * @param  string|null $start_parameter Unique deep-linking parameter. If left empty,
     * <strong>forwarded copies</strong> of the sent message will have a <em>Pay</em> button, allowing
     * multiple users to pay directly from the forwarded message, using the same invoice. If non-empty,
     * forwarded copies of the sent message will have a <em>URL</em> button with a deep link to the bot
     * (instead of a <em>Pay</em> button), with the value used as the start parameter.
     * @param  string|null $provider_data JSON-serialized data about the invoice, which will be shared with
     * the payment provider. A detailed description of required fields should be provided by the payment
     * provider.
     * @param  string|null $photo_url URL of the product photo for the invoice. Can be a photo of the goods
     * or a marketing image for a service. People like it better when they see what they are paying for.
     * @param  int|null $photo_size Photo size in bytes
     * @param  int|null $photo_width Photo width
     * @param  int|null $photo_height Photo height
     * @param  bool|null $need_name Pass <em>True</em> if you require the user's full name to complete the
     * order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool|null $need_phone_number Pass <em>True</em> if you require the user's phone number to
     * complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool|null $need_email Pass <em>True</em> if you require the user's email address to complete
     * the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool|null $need_shipping_address Pass <em>True</em> if you require the user's shipping
     * address to complete the order. Ignored for payments in
     * <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool|null $send_phone_number_to_provider Pass <em>True</em> if the user's phone number
     * should be sent to the provider. Ignored for payments in
     * <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool|null $send_email_to_provider Pass <em>True</em> if the user's email address should be
     * sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool|null $is_flexible Pass <em>True</em> if the final price depends on the shipping method.
     * Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool|null $disable_notification Sends the message
     * <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
     * notification with no sound.
     * @param  bool|null $protect_content Protects the contents of the sent message from forwarding and
     * saving
     * @param  bool|null $allow_paid_broadcast Pass <em>True</em> to allow up to 1000 messages per second,
     * ignoring
     * <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a>
     * for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's
     * balance.
     * @param  string|null $message_effect_id Unique identifier of the message effect to be added to the
     * message; for private chats only
     * @param  SuggestedPostParameters|null $suggested_post_parameters A JSON-serialized object containing
     * the parameters of the suggested post to send; for direct messages chats only. If the message is sent
     * as a reply to another suggested post, then that suggested post is automatically declined.
     * @param  ReplyParameters|null $reply_parameters Description of the message to reply to
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for an
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>. If empty, one 'Pay
     * <code>total price</code>' button will be shown. If not empty, the first button must be a Pay button.
     *
     * @return Message
     */
    public function sendInvoice(
        int|string $chat_id,
        string $title,
        string $description,
        string $payload,
        string $currency,
        array $prices,
        ?int $message_thread_id,
        ?int $direct_messages_topic_id,
        ?string $provider_token,
        ?int $max_tip_amount,
        ?array $suggested_tip_amounts,
        ?string $start_parameter,
        ?string $provider_data,
        ?string $photo_url,
        ?int $photo_size,
        ?int $photo_width,
        ?int $photo_height,
        ?bool $need_name,
        ?bool $need_phone_number,
        ?bool $need_email,
        ?bool $need_shipping_address,
        ?bool $send_phone_number_to_provider,
        ?bool $send_email_to_provider,
        ?bool $is_flexible,
        ?bool $disable_notification,
        ?bool $protect_content,
        ?bool $allow_paid_broadcast,
        ?string $message_effect_id,
        ?SuggestedPostParameters $suggested_post_parameters,
        ?ReplyParameters $reply_parameters,
        ?InlineKeyboardMarkup $reply_markup,
    ): Message;

    /**
     * Use this method to create a link for an invoice. Returns the created invoice link as <em>String</em>
     * on success.
     *
     * @param  string $title Product name, 1-32 characters
     * @param  string $description Product description, 1-255 characters
     * @param  string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the
     * user, use it for your internal processes.
     * @param  string $currency Three-letter ISO 4217 currency code, see
     * <a href="/bots/payments#supported-currencies">more on currencies</a>. Pass "XTR" for payments in
     * <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  LabeledPrice[] $prices Price breakdown, a JSON-serialized list of components (e.g. product
     * price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for
     * payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the link will be created. For payments in
     * <a href="https://t.me/BotNews/90">Telegram Stars</a> only.
     * @param  string|null $provider_token Payment provider token, obtained via
     * <a href="https://t.me/botfather">@BotFather</a>. Pass an empty string for payments in
     * <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  int|null $subscription_period The number of seconds the subscription will be active for
     * before the next payment. The currency must be set to "XTR" (Telegram Stars) if the parameter is
     * used. Currently, it must always be 2592000 (30 days) if specified. Any number of subscriptions can
     * be active for a given bot at the same time, including multiple concurrent subscriptions from the
     * same user. Subscription price must no exceed 10000 Telegram Stars.
     * @param  int|null $max_tip_amount The maximum accepted amount for tips in the <em>smallest units</em>
     * of the currency (integer, <strong>not</strong> float/double). For example, for a maximum tip of
     * <code>US$ 1.45</code> pass <code>max_tip_amount = 145</code>. See the <em>exp</em> parameter in
     * <a href="/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the
     * decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for
     * payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  int[]|null $suggested_tip_amounts A JSON-serialized Array of suggested amounts of tips in
     * the <em>smallest units</em> of the currency (integer, <strong>not</strong> float/double). At most 4
     * suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a
     * strictly increased order and must not exceed <em>max_tip_amount</em>.
     * @param  string|null $provider_data JSON-serialized data about the invoice, which will be shared with
     * the payment provider. A detailed description of required fields should be provided by the payment
     * provider.
     * @param  string|null $photo_url URL of the product photo for the invoice. Can be a photo of the goods
     * or a marketing image for a service.
     * @param  int|null $photo_size Photo size in bytes
     * @param  int|null $photo_width Photo width
     * @param  int|null $photo_height Photo height
     * @param  bool|null $need_name Pass <em>True</em> if you require the user's full name to complete the
     * order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool|null $need_phone_number Pass <em>True</em> if you require the user's phone number to
     * complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool|null $need_email Pass <em>True</em> if you require the user's email address to complete
     * the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool|null $need_shipping_address Pass <em>True</em> if you require the user's shipping
     * address to complete the order. Ignored for payments in
     * <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool|null $send_phone_number_to_provider Pass <em>True</em> if the user's phone number
     * should be sent to the provider. Ignored for payments in
     * <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool|null $send_email_to_provider Pass <em>True</em> if the user's email address should be
     * sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool|null $is_flexible Pass <em>True</em> if the final price depends on the shipping method.
     * Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     *
     * @return string
     */
    public function createInvoiceLink(
        string $title,
        string $description,
        string $payload,
        string $currency,
        array $prices,
        ?string $business_connection_id,
        ?string $provider_token,
        ?int $subscription_period,
        ?int $max_tip_amount,
        ?array $suggested_tip_amounts,
        ?string $provider_data,
        ?string $photo_url,
        ?int $photo_size,
        ?int $photo_width,
        ?int $photo_height,
        ?bool $need_name,
        ?bool $need_phone_number,
        ?bool $need_email,
        ?bool $need_shipping_address,
        ?bool $send_phone_number_to_provider,
        ?bool $send_email_to_provider,
        ?bool $is_flexible,
    ): string;

    /**
     * If you sent an invoice requesting a shipping address and the parameter <em>is_flexible</em> was
     * specified, the Bot API will send an <a href="https://core.telegram.org/bots/api#update">Update</a>
     * with a <em>shipping_query</em> field to the bot. Use this method to reply to shipping queries. On
     * success, <em>True</em> is returned.
     *
     * @param  string $shipping_query_id Unique identifier for the query to be answered
     * @param  bool $ok Pass <em>True</em> if delivery to the specified address is possible and
     * <em>False</em> if there are any problems (for example, if delivery to the specified address is not
     * possible)
     * @param  ShippingOption[]|null $shipping_options Required if <em>ok</em> is <em>True</em>. A
     * JSON-serialized Array of available shipping options.
     * @param  string|null $error_message Required if <em>ok</em> is <em>False</em>. Error message in human
     * readable form that explains why it is impossible to complete the order (e.g. "Sorry, delivery to
     * your desired address is unavailable"). Telegram will display this message to the user.
     *
     * @return true
     */
    public function answerShippingQuery(
        string $shipping_query_id,
        bool $ok,
        ?array $shipping_options,
        ?string $error_message,
    ): true;

    /**
     * Once the user has confirmed their payment and shipping details, the Bot API sends the final
     * confirmation in the form of an <a href="https://core.telegram.org/bots/api#update">Update</a> with
     * the field <em>pre_checkout_query</em>. Use this method to respond to such pre-checkout queries. On
     * success, <em>True</em> is returned. Note: The Bot API must receive an answer within 10 seconds after
     * the pre-checkout query was sent.
     *
     * @param  string $pre_checkout_query_id Unique identifier for the query to be answered
     * @param  bool $ok Specify <em>True</em> if everything is alright (goods are available, etc.) and the
     * bot is ready to proceed with the order. Use <em>False</em> if there are any problems.
     * @param  string|null $error_message Required if <em>ok</em> is <em>False</em>. Error message in human
     * readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry,
     * somebody just bought the last of our amazing black T-shirts while you were busy filling out your
     * payment details. Please choose a different color or garment!"). Telegram will display this message
     * to the user.
     *
     * @return true
     */
    public function answerPreCheckoutQuery(
        string $pre_checkout_query_id,
        bool $ok,
        ?string $error_message,
    ): true;

    /**
     * A method to get the current Telegram Stars balance of the bot. Requires no parameters. On success,
     * returns a <a href="https://core.telegram.org/bots/api#staramount">StarAmount</a> object.
     *
     *
     * @return StarAmount
     */
    public function getMyStarBalance(): StarAmount;

    /**
     * Returns the bot's Telegram Star transactions in chronological order. On success, returns a
     * <a href="https://core.telegram.org/bots/api#startransactions">StarTransactions</a> object.
     *
     * @param  int|null $offset Number of transactions to skip in the response
     * @param  int|null $limit The maximum number of transactions to be retrieved. Values between 1-100 are
     * accepted. Defaults to 100.
     *
     * @return StarTransactions
     */
    public function getStarTransactions(?int $offset, ?int $limit): StarTransactions;

    /**
     * Refunds a successful payment in <a href="https://t.me/BotNews/90">Telegram Stars</a>. Returns
     * <em>True</em> on success.
     *
     * @param  int $user_id Identifier of the user whose payment will be refunded
     * @param  string $telegram_payment_charge_id Telegram payment identifier
     *
     * @return true
     */
    public function refundStarPayment(int $user_id, string $telegram_payment_charge_id): true;

    /**
     * Allows the bot to cancel or re-enable extension of a subscription paid in Telegram Stars. Returns
     * <em>True</em> on success.
     *
     * @param  int $user_id Identifier of the user whose subscription will be edited
     * @param  string $telegram_payment_charge_id Telegram payment identifier for the subscription
     * @param  bool $is_canceled Pass <em>True</em> to cancel extension of the user subscription; the
     * subscription must be active up to the end of the current subscription period. Pass <em>False</em> to
     * allow the user to re-enable a subscription that was previously canceled by the bot.
     *
     * @return true
     */
    public function editUserStarSubscription(
        int $user_id,
        string $telegram_payment_charge_id,
        bool $is_canceled,
    ): true;
}
