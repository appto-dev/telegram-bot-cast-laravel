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
class SetManagedBotAccessSettings extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  User identifier of the managed bot whose access settings will be changed */
        public int $user_id,
        /**
         * @var  bool  Pass <em>True</em> if only selected users can access the bot. The bot's owner can always
         * access it.
         */
        public bool $is_access_restricted,
        /**
         * @var  int[]|null  A JSON-serialized list of up to 10 identifiers of users who will have access to
         * the bot in addition to its owner. Ignored if <em>is_access_restricted</em> is <em>False</em>.
         */
        public ?array $added_user_ids,
    ) {
    }
}
