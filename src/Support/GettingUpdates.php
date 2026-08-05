<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Support;

use Appto\TelegramBot\Type\InputFile;
use Appto\TelegramBot\Type\Update;
use Appto\TelegramBot\Type\WebhookInfo;

/**
 * There are two mutually exclusive ways of receiving updates for your bot - the
 * <a href="#getupdates">getUpdates</a> method on one hand and <a href="#setwebhook">webhooks</a> on
 * the other. Incoming updates are stored on the server until the bot receives them either way, but
 * they will not be kept longer than 24 hours.
 * Regardless of which option you choose, you will receive JSON-serialized <a href="#update">Update</a>
 * objects as a result.
 */
interface GettingUpdates
{
    /**
     * Use this method to receive incoming updates using long polling
     * (<a href="https://en.wikipedia.org/wiki/Push_technology#Long_polling">wiki</a>). Returns an Array of
     * <a href="https://core.telegram.org/bots/api#update">Update</a> objects.
     *
     * @param  int|null $offset Identifier of the first update to be returned. Must be greater by one than
     * the highest among the identifiers of previously received updates. By default, updates starting with
     * the earliest unconfirmed update are returned. An update is considered confirmed as soon as
     * <a href="#getupdates">getUpdates</a> is called with an <em>offset</em> higher than its
     * <em>update_id</em>. The negative offset can be specified to retrieve updates starting from
     * <em>-offset</em> update from the end of the updates queue. All previous updates will be forgotten.
     * @param  int|null $limit Limits the number of updates to be retrieved. Values between 1-100 are
     * accepted. Defaults to 100.
     * @param  int|null $timeout Timeout in seconds for long polling. Defaults to 0, i.e. usual short
     * polling. Should be positive, short polling should be used for testing purposes only.
     * @param  string[]|null $allowed_updates A JSON-serialized list of the update types you want your bot
     * to receive. For example, specify <code>["message", "edited_channel_post", "callback_query"]</code>
     * to only receive updates of these types. See <a href="#update">Update</a> for a complete list of
     * available update types. Specify an empty list to receive all update types except
     * <em>chat_member</em>, <em>message_reaction</em>, and <em>message_reaction_count</em> (default). If
     * not specified, the previous setting will be used.<br><br>Please note that this parameter doesn't
     * affect updates created before the call to getUpdates, so unwanted updates may be received for a
     * short period of time.
     *
     * @return Update[]
     */
    public function getUpdates(
        ?int $offset = null,
        ?int $limit = null,
        ?int $timeout = null,
        ?array $allowed_updates = null,
    ): array;

    /**
     * Use this method to specify a URL and receive incoming updates via an outgoing webhook. Whenever
     * there is an update for the bot, we will send an HTTPS POST request to the specified URL, containing
     * a JSON-serialized <a href="https://core.telegram.org/bots/api#update">Update</a>. In case of an
     * unsuccessful request (a request with response
     * <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes">HTTP status code</a> different
     * from 2XY), we will repeat the request and give up after a reasonable amount of attempts. Returns
     * <em>True</em> on success.
     * If you'd like to make sure that the webhook was set by you, you can specify secret data in the
     * parameter <em>secret_token</em>. If specified, the request will contain a header
     * "X-Telegram-Bot-Api-Secret-Token" with the secret token as content.
     *
     * @param  string $url HTTPS URL to send updates to. Use an empty string to remove webhook integration.
     * @param  InputFile|null $certificate Upload your public key certificate so that the root certificate
     * in use can be checked. See our <a href="/bots/self-signed">self-signed guide</a> for details.
     * @param  string|null $ip_address The fixed IP address which will be used to send webhook requests
     * instead of the IP address resolved through DNS
     * @param  int|null $max_connections The maximum allowed number of simultaneous HTTPS connections to
     * the webhook for update delivery, 1-100. Defaults to <em>40</em>. Use lower values to limit the load
     * on your bot's server, and higher values to increase your bot's throughput.
     * @param  string[]|null $allowed_updates A JSON-serialized list of the update types you want your bot
     * to receive. For example, specify <code>["message", "edited_channel_post", "callback_query"]</code>
     * to only receive updates of these types. See <a href="#update">Update</a> for a complete list of
     * available update types. Specify an empty list to receive all update types except
     * <em>chat_member</em>, <em>message_reaction</em>, and <em>message_reaction_count</em> (default). If
     * not specified, the previous setting will be used.<br>Please note that this parameter doesn't affect
     * updates created before the call to the setWebhook, so unwanted updates may be received for a short
     * period of time.
     * @param  bool|null $drop_pending_updates Pass <em>True</em> to drop all pending updates
     * @param  string|null $secret_token A secret token to be sent in a header
     * "X-Telegram-Bot-Api-Secret-Token" in every webhook request, 1-256 characters. Only characters
     * <code>A-Z</code>, <code>a-z</code>, <code>0-9</code>, <code>_</code> and <code>-</code> are allowed.
     * The header is useful to ensure that the request comes from a webhook set by you.
     *
     * @return true
     */
    public function setWebhook(
        string $url,
        ?InputFile $certificate = null,
        ?string $ip_address = null,
        ?int $max_connections = null,
        ?array $allowed_updates = null,
        ?bool $drop_pending_updates = null,
        ?string $secret_token = null,
    ): true;

    /**
     * Use this method to remove webhook integration if you decide to switch back to
     * <a href="https://core.telegram.org/bots/api#getupdates">getUpdates</a>. Returns <em>True</em> on
     * success.
     *
     * @param  bool|null $drop_pending_updates Pass <em>True</em> to drop all pending updates
     *
     * @return true
     */
    public function deleteWebhook(?bool $drop_pending_updates = null): true;

    /**
     * Use this method to get current webhook status. Requires no parameters. On success, returns a
     * <a href="https://core.telegram.org/bots/api#webhookinfo">WebhookInfo</a> object. If the bot is using
     * <a href="https://core.telegram.org/bots/api#getupdates">getUpdates</a>, will return an object with
     * the <em>url</em> field empty.
     *
     *
     * @return WebhookInfo
     */
    public function getWebhookInfo(): WebhookInfo;
}
