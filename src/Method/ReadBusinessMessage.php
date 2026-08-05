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
class ReadBusinessMessage extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier of the business connection on behalf of which to read the message */
        public string $business_connection_id,
        /**
         * @var  int  Unique identifier of the chat in which the message was received. The chat must have been
         * active in the last 24 hours.
         */
        public int $chat_id,
        /** @var  int  Unique identifier of the message to mark as read */
        public int $message_id,
    ) {
    }
}
