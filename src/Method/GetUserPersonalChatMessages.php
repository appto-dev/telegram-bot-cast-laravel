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
class GetUserPersonalChatMessages extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  Unique identifier for the target user */
        public int $user_id,
        /** @var  int  The maximum number of messages to return; 1-20 */
        public int $limit,
    ) {
    }
}
