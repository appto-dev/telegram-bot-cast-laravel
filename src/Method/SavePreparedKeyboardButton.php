<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\KeyboardButton;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class SavePreparedKeyboardButton extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  Unique identifier of the target user that can use the button */
        public int $user_id,
        /**
         * @var  KeyboardButton  A JSON-serialized object describing the button to be saved. The button must be
         * of the type <em>request_users</em>, <em>request_chat</em>, or <em>request_managed_bot</em>.
         */
        public KeyboardButton $button,
    ) {
    }
}
