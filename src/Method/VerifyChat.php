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
class VerifyChat extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target bot, supergroup or
         * channel in the format <code>@username</code>. Channel direct messages chats can't be verified.
         */
        public int|string $chat_id,
        /**
         * @var  string|null  Custom description for the verification; 0-70 characters. Must be empty if the
         * organization isn't allowed to provide a custom verification description.
         */
        public ?string $custom_description,
    ) {
    }
}
