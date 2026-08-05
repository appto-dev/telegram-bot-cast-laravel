<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\AcceptedGiftTypes;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class SetBusinessAccountGiftSettings extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier of the business connection */
        public string $business_connection_id,
        /**
         * @var  bool  Pass <em>True</em> if a button for sending a gift to the user or by the business account
         * must always be shown in the input field
         */
        public bool $show_gift_button,
        /** @var  AcceptedGiftTypes  Types of gifts accepted by the business account */
        public AcceptedGiftTypes $accepted_gift_types,
    ) {
    }
}
