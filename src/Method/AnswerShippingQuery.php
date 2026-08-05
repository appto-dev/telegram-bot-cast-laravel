<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\ShippingOption;
use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class AnswerShippingQuery extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier for the query to be answered */
        public string $shipping_query_id,
        /**
         * @var  bool  Pass <em>True</em> if delivery to the specified address is possible and <em>False</em>
         * if there are any problems (for example, if delivery to the specified address is not possible)
         */
        public bool $ok,
        /**
         * @var  ShippingOption[]|null  Required if <em>ok</em> is <em>True</em>. A JSON-serialized Array of
         * available shipping options.
         */
        public ?array $shipping_options,
        /**
         * @var  string|null  Required if <em>ok</em> is <em>False</em>. Error message in human readable form
         * that explains why it is impossible to complete the order (e.g. "Sorry, delivery to your desired
         * address is unavailable"). Telegram will display this message to the user.
         */
        public ?string $error_message,
    ) {
    }
}
