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
class RemoveBusinessAccountProfilePhoto extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier of the business connection */
        public string $business_connection_id,
        /**
         * @var  bool|null  Pass <em>True</em> to remove the public photo, which is visible even if the main
         * photo is hidden by the business account's privacy settings. After the main photo is removed, the
         * previous profile photo (if present) becomes the main photo.
         */
        public ?bool $is_public,
    ) {
    }
}
