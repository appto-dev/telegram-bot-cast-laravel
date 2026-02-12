<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to get current webhook status. Requires no parameters. On
 * success, returns a <a
 * href="https://core.telegram.org/bots/api#webhookinfo">WebhookInfo</a> object. If
 * the bot is using <a
 * href="https://core.telegram.org/bots/api#getupdates">getUpdates</a>, will return
 * an object with the <em>url</em> field empty.
 */
final class GetWebhookInfo extends Data implements TelegramBotData
{
}
