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
class AnswerWidgetQuery extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier for the query to be answered */
        public string $widget_query_id,
        /** @var  string|null  Data to be returned to the widget, 0-1024 bytes */
        public ?string $data,
    ) {
    }
}
