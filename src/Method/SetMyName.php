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
class SetMyName extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  string|null  New bot name; 0-64 characters. Pass an empty string to remove the dedicated name
         * for the given language.
         */
        public ?string $name,
        /**
         * @var  string|null  A two-letter ISO 639-1 language code. If empty, the name will be shown to all
         * users for whose language there is no dedicated name.
         */
        public ?string $language_code,
    ) {
    }
}
