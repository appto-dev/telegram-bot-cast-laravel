<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\InputFile;
use Spatie\LaravelData\Data;

/**
 * There are two mutually exclusive ways of receiving updates for your bot - the
 * <a href="#getupdates">getUpdates</a> method on one hand and <a href="#setwebhook">webhooks</a> on
 * the other. Incoming updates are stored on the server until the bot receives them either way, but
 * they will not be kept longer than 24 hours.
 * Regardless of which option you choose, you will receive JSON-serialized <a href="#update">Update</a>
 * objects as a result.
 */
class SetWebhook extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  HTTPS URL to send updates to. Use an empty string to remove webhook integration. */
        public string $url,
        /**
         * @var  InputFile|null  Upload your public key certificate so that the root certificate in use can be
         * checked. See our <a href="/bots/self-signed">self-signed guide</a> for details.
         */
        public ?InputFile $certificate,
        /**
         * @var  string|null  The fixed IP address which will be used to send webhook requests instead of the
         * IP address resolved through DNS
         */
        public ?string $ip_address,
        /**
         * @var  int|null  The maximum allowed number of simultaneous HTTPS connections to the webhook for
         * update delivery, 1-100. Defaults to <em>40</em>. Use lower values to limit the load on your bot's
         * server, and higher values to increase your bot's throughput.
         */
        public ?int $max_connections,
        /**
         * @var  string[]|null  A JSON-serialized list of the update types you want your bot to receive. For
         * example, specify <code>["message", "edited_channel_post", "callback_query"]</code> to only receive
         * updates of these types. See <a href="#update">Update</a> for a complete list of available update
         * types. Specify an empty list to receive all update types except <em>chat_member</em>,
         * <em>message_reaction</em>, and <em>message_reaction_count</em> (default). If not specified, the
         * previous setting will be used.<br>Please note that this parameter doesn't affect updates created
         * before the call to the setWebhook, so unwanted updates may be received for a short period of time.
         */
        public ?array $allowed_updates,
        /** @var  bool|null  Pass <em>True</em> to drop all pending updates */
        public ?bool $drop_pending_updates,
        /**
         * @var  string|null  A secret token to be sent in a header "X-Telegram-Bot-Api-Secret-Token" in every
         * webhook request, 1-256 characters. Only characters <code>A-Z</code>, <code>a-z</code>,
         * <code>0-9</code>, <code>_</code> and <code>-</code> are allowed. The header is useful to ensure that
         * the request comes from a webhook set by you.
         */
        public ?string $secret_token,
    ) {
    }
}
