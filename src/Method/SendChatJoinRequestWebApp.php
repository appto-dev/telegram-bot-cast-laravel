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
class SendChatJoinRequestWebApp extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier of the join request query */
        public string $chat_join_request_query_id,
        /**
         * @var  string  An HTTPS URL of a Web App to be opened with additional data as specified in
         * <a href="/bots/webapps#initializing-mini-apps">Initializing Web Apps</a>
         */
        public string $web_app_url,
    ) {
    }
}
