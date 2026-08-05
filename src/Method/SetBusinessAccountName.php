<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class SetBusinessAccountName extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier of the business connection */
        public string $business_connection_id,
        /** @var  string  The new value of the first name for the business account; 1-64 characters */
        public string $first_name,
        /** @var  string|null  The new value of the last name for the business account; 0-64 characters */
        public ?string $last_name,
    ) {
    }
}
