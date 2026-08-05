<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Support\Casts\InputProfilePhotoCast;
use Appto\TelegramBot\Type\InputProfilePhoto;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class SetBusinessAccountProfilePhoto extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier of the business connection */
        public string $business_connection_id,
        /** @var  InputProfilePhoto  The new profile photo to set */
        #[WithCast(InputProfilePhotoCast::class)]
        public InputProfilePhoto $photo,
        /**
         * @var  bool|null  Pass <em>True</em> to set the public photo, which will be visible even if the main
         * photo is hidden by the business account's privacy settings. An account can have only one public
         * photo.
         */
        public ?bool $is_public,
    ) {
    }
}
