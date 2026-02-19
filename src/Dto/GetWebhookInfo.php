<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to get current webhook status. Requires no parameters. On success, returns a <a
 * href="https://core.telegram.org/bots/api#webhookinfo">WebhookInfo</a> object. If the bot is using <a
 * href="https://core.telegram.org/bots/api#getupdates">getUpdates</a>, will return an object with the <em>url</em> field
 * empty.
 */
final class GetWebhookInfo extends Dto implements TelegramBotDto
{
}
