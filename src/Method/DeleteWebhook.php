<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to remove webhook integration if you decide to switch back to <a
 * href="#getupdates">getUpdates</a>. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class DeleteWebhook extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Pass True to drop all pending updates
         * @var bool
         */
        public ?bool $drop_pending_updates,
    ) {
    }
}
