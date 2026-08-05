<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class EditUserStarSubscription extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  Identifier of the user whose subscription will be edited */
        public int $user_id,
        /** @var  string  Telegram payment identifier for the subscription */
        public string $telegram_payment_charge_id,
        /**
         * @var  bool  Pass <em>True</em> to cancel extension of the user subscription; the subscription must
         * be active up to the end of the current subscription period. Pass <em>False</em> to allow the user to
         * re-enable a subscription that was previously canceled by the bot.
         */
        public bool $is_canceled,
    ) {
    }
}
