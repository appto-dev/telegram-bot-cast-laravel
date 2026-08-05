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
class GetUserProfilePhotos extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  Unique identifier of the target user */
        public int $user_id,
        /**
         * @var  int|null  Sequential number of the first photo to be returned. By default, all photos are
         * returned.
         */
        public ?int $offset,
        /**
         * @var  int|null  Limits the number of photos to be retrieved. Values between 1-100 are accepted.
         * Defaults to 100.
         */
        public ?int $limit,
    ) {
    }
}
