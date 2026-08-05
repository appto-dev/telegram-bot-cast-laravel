<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * There are two mutually exclusive ways of receiving updates for your bot - the
 * <a href="#getupdates">getUpdates</a> method on one hand and <a href="#setwebhook">webhooks</a> on
 * the other. Incoming updates are stored on the server until the bot receives them either way, but
 * they will not be kept longer than 24 hours.
 * Regardless of which option you choose, you will receive JSON-serialized <a href="#update">Update</a>
 * objects as a result.
 */
class WebhookInfo extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Webhook URL, may be empty if webhook is not set up */
        public string $url,
        /** @var  bool  True, if a custom certificate was provided for webhook certificate checks */
        public bool $has_custom_certificate,
        /** @var  int  Number of updates awaiting delivery */
        public int $pending_update_count,
        /** @var  string|null  Currently used webhook IP address */
        public ?string $ip_address,
        /**
         * @var  int|null  Unix time for the most recent error that happened when trying to deliver an update
         * via webhook
         */
        public ?int $last_error_date,
        /**
         * @var  string|null  Error message in human-readable format for the most recent error that happened
         * when trying to deliver an update via webhook
         */
        public ?string $last_error_message,
        /**
         * @var  int|null  Unix time of the most recent error that happened when trying to synchronize
         * available updates with Telegram datacenters
         */
        public ?int $last_synchronization_error_date,
        /**
         * @var  int|null  The maximum allowed number of simultaneous HTTPS connections to the webhook for
         * update delivery
         */
        public ?int $max_connections,
        /**
         * @var  string[]|null  A list of update types the bot is subscribed to. Defaults to all update types
         * except chat_member, message_reaction, and message_reaction_count.
         */
        public ?array $allowed_updates,
    ) {
    }
}
