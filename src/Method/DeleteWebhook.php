<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * There are two mutually exclusive ways of receiving updates for your bot - the
 * <a href="#getupdates">getUpdates</a> method on one hand and <a href="#setwebhook">webhooks</a> on
 * the other. Incoming updates are stored on the server until the bot receives them either way, but
 * they will not be kept longer than 24 hours.
 * Regardless of which option you choose, you will receive JSON-serialized <a href="#update">Update</a>
 * objects as a result.
 */
class DeleteWebhook extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  bool|null  Pass <em>True</em> to drop all pending updates */
        public ?bool $drop_pending_updates,
    ) {
    }
}
