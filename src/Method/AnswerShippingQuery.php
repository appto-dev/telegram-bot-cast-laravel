<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\ShippingOption;
use Spatie\LaravelData\Data;

/**
 * If you sent an invoice requesting a shipping address and the parameter
 * <em>is_flexible</em> was specified, the Bot API will send an <a
 * href="#update">Update</a> with a <em>shipping_query</em> field to the bot. Use
 * this method to reply to shipping queries. On success, <em>True</em> is returned.
 */
final class AnswerShippingQuery extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the query to be answered
         * @var string
         */
        public string $shipping_query_id,
        /**
         * Pass <em>True</em> if delivery to the specified address is possible and
         * <em>False</em> if there are any problems (for example, if delivery to the
         * specified address is not possible)
         * @var bool
         */
        public bool $ok,
        /**
         * Required if <em>ok</em> is <em>True</em>. A JSON-serialized array of available
         * shipping options.
         * @var ShippingOption[]
         */
        public ?array $shipping_options,
        /**
         * Required if <em>ok</em> is <em>False</em>. Error message in human readable form
         * that explains why it is impossible to complete the order (e.g. "Sorry, delivery
         * to your desired address is unavailable"). Telegram will display this message to
         * the user.
         * @var string
         */
        public ?string $error_message,
    ) {
    }
}
