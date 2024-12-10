<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to get current webhook status. Requires no parameters. On
 * success, returns a <a href="#webhookinfo">WebhookInfo</a> object. If the bot is
 * using <a href="#getupdates">getUpdates</a>, will return an object with the
 * <em>url</em> field empty.
 */
final class GetWebhookInfo extends Data implements TelegramMethodInterface
{
}
