<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class AnswerPreCheckoutQuery extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier for the query to be answered */
        public string $pre_checkout_query_id,
        /**
         * @var  bool  Specify <em>True</em> if everything is alright (goods are available, etc.) and the bot
         * is ready to proceed with the order. Use <em>False</em> if there are any problems.
         */
        public bool $ok,
        /**
         * @var  string|null  Required if <em>ok</em> is <em>False</em>. Error message in human readable form
         * that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought
         * the last of our amazing black T-shirts while you were busy filling out your payment details. Please
         * choose a different color or garment!"). Telegram will display this message to the user.
         */
        public ?string $error_message,
    ) {
    }
}
