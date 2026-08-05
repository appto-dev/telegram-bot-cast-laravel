<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BotSubscriptionUpdated extends Data implements TelegramType
{
    public function __construct(
        /** @var  User  User who subscribed for payments toward the bot */
        public User $user,
        /** @var  string  Bot-specified invoice payload */
        public string $invoice_payload,
        /**
         * @var  string  The new state of the subscription. Currently, it can be one of "canceled" if the user
         * canceled the subscription, "active" if the user re-enabled a previously canceled subscription, or
         * "failed" if payment for the subscription failed.
         */
        public string $state,
    ) {
    }
}
