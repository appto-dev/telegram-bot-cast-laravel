<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object contains information about changes to a user payment subscription toward the current bot.
 */
final class BotSubscriptionUpdated extends Data implements TelegramBotData
{
    public function __construct(
        /** User who subscribed for payments toward the bot */
        public User $user,
        /** Bot-specified invoice payload */
        public string $invoice_payload,
        /**
         * The new state of the subscription. Currently, it can be one of "canceled" if the user canceled the
         * subscription, "active" if the user re-enabled a previously canceled subscription, or "failed" if payment for
         * the subscription failed.
         */
        public string $state,
    ) {
    }
}
