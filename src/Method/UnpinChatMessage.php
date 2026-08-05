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
class UnpinChatMessage extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  string|null  Unique identifier of the business connection on behalf of which the message will
         * be unpinned
         */
        public ?string $business_connection_id,
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target channel in the
         * format <code>@username</code>
         */
        public int|string $chat_id,
        /**
         * @var  int|null  Identifier of the message to unpin. Required if <em>business_connection_id</em> is
         * specified. If not specified, the most recent pinned message (by sending date) will be unpinned.
         */
        public ?int $message_id,
    ) {
    }
}
