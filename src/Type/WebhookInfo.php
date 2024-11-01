<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes the current status of a webhook.
 *
 * @version Telegram Bot API 7.11
 */
final class WebhookInfo extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Webhook URL, may be empty if webhook is not set up
         * @var string
         */
        public string $url,
        /**
         * True, if a custom certificate was provided for webhook certificate checks
         * @var bool
         */
        public bool $has_custom_certificate,
        /**
         * Number of updates awaiting delivery
         * @var int
         */
        public int $pending_update_count,
        /**
         * Currently used webhook IP address
         * @var string
         */
        public ?string $ip_address,
        /**
         * Unix time for the most recent error that happened when trying to deliver an
         * update via webhook
         * @var int
         */
        public ?int $last_error_date,
        /**
         * Error message in human-readable format for the most recent error that happened
         * when trying to deliver an update via webhook
         * @var string
         */
        public ?string $last_error_message,
        /**
         * Unix time of the most recent error that happened when trying to synchronize
         * available updates with Telegram datacenters
         * @var int
         */
        public ?int $last_synchronization_error_date,
        /**
         * The maximum allowed number of simultaneous HTTPS connections to the webhook for
         * update delivery
         * @var int
         */
        public ?int $max_connections,
        /**
         * A list of update types the bot is subscribed to. Defaults to all update types
         * except chat_member
         * @var string[]
         */
        public ?array $allowed_updates,
    ) {
    }
}
