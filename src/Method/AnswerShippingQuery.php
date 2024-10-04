<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use ApptoTeam\TelegramBotCastLaravel\Type\ShippingOption;
use Spatie\LaravelData\Data;

/**
 * AnswerShippingQuery
 *
 * If you sent an invoice requesting a shipping address and the parameter
 * is_flexible was specified, the Bot API will send an Update with a shipping_query
 * field to the bot. Use this method to reply to shipping queries. On success, True
 * is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class AnswerShippingQuery extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /** Unique identifier for the query to be answered */
        public string $shipping_query_id,
        /**
         * Pass True if delivery to the specified address is possible and False
         * if there are any problems (for example, if delivery to the specified
         * address is not possible)
         */
        public bool $ok,
        /**
         * Required if ok is True. A JSON-serialized array of available shipping
         * options.
         * @var array<ShippingOption>
         */
        public ?array $shipping_options,
        /**
         * Required if ok is False. Error message in human readable form that
         * explains why it is impossible to complete the order (e.g. "Sorry,
         * delivery to your desired address is unavailable'). Telegram will
         * display this message to the user.
         */
        public ?string $error_message,
    ) {
    }
}