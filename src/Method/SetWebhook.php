<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InputFile;
use Spatie\LaravelData\Data;

/**
 * Use this method to specify a URL and receive incoming updates via an outgoing
 * webhook. Whenever there is an update for the bot, we will send an HTTPS POST
 * request to the specified URL, containing a JSON-serialized <a
 * href="#update">Update</a>. In case of an unsuccessful request, we will give up
 * after a reasonable amount of attempts. Returns <em>True</em> on success.
 * If you'd like to make sure that the webhook was set by you, you can specify
 * secret data in the parameter <em>secret_token</em>. If specified, the request
 * will contain a header "X-Telegram-Bot-Api-Secret-Token" with the secret token as
 * content.
 *
 * @version Telegram Bot API 7.11
 */
final class SetWebhook extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * HTTPS URL to send updates to. Use an empty string to remove webhook integration
         * @var string
         */
        public string $url,
        /**
         * Upload your public key certificate so that the root certificate in use can be
         * checked. See our <a href="/bots/self-signed">self-signed guide</a> for details.
         * @var InputFile
         */
        public ?InputFile $certificate,
        /**
         * The fixed IP address which will be used to send webhook requests instead of the
         * IP address resolved through DNS
         * @var string
         */
        public ?string $ip_address,
        /**
         * The maximum allowed number of simultaneous HTTPS connections to the webhook for
         * update delivery, 1-100. Defaults to <em>40</em>. Use lower values to limit the
         * load on your bot's server, and higher values to increase your bot's throughput.
         * @var int
         */
        public ?int $max_connections,
        /**
         * A JSON-serialized list of the update types you want your bot to receive. For
         * example, specify <code>["message", "edited_channel_post",
         * "callback_query"]</code> to only receive updates of these types. See <a
         * href="#update">Update</a> for a complete list of available update types. Specify
         * an empty list to receive all update types except <em>chat_member</em>,
         * <em>message_reaction</em>, and <em>message_reaction_count</em> (default). If not
         * specified, the previous setting will be used.<br>Please note that this parameter
         * doesn't affect updates created before the call to the setWebhook, so unwanted
         * updates may be received for a short period of time.
         * @var string[]
         */
        public ?array $allowed_updates,
        /**
         * Pass <em>True</em> to drop all pending updates
         * @var bool
         */
        public ?bool $drop_pending_updates,
        /**
         * A secret token to be sent in a header "X-Telegram-Bot-Api-Secret-Token" in every
         * webhook request, 1-256 characters. Only characters <code>A-Z</code>,
         * <code>a-z</code>, <code>0-9</code>, <code>_</code> and <code>-</code> are
         * allowed. The header is useful to ensure that the request comes from a webhook
         * set by you.
         * @var string
         */
        public ?string $secret_token,
    ) {
    }
}
