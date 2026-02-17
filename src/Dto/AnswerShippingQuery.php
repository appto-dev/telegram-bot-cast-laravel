<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\ShippingOption;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * If you sent an invoice requesting a shipping address and the parameter <em>is_flexible</em> was specified, the
 * Bot API will send an <a href="https://core.telegram.org/bots/api#update">Update</a> with a
 * <em>shipping_query</em> field to the bot. Use this method to reply to shipping queries. On success,
 * <em>True</em> is returned.
 */
final class AnswerShippingQuery extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier for the query to be answered */
        public string $shipping_query_id,
        /**
         * Pass <em>True</em> if delivery to the specified address is possible and <em>False</em> if there are any
         * problems (for example, if delivery to the specified address is not possible)
         */
        public bool $ok,
        /** Required if <em>ok</em> is <em>True</em>. A JSON-serialized array of available shipping options. */
        public ?ShippingOption $shipping_options,
        /**
         * Required if <em>ok</em> is <em>False</em>. Error message in human readable form that explains why it is
         * impossible to complete the order (e.g. "Sorry, delivery to your desired address is unavailable"). Telegram
         * will display this message to the user.
         */
        public ?string $error_message,
    ) {
    }
}
