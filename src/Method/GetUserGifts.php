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
class GetUserGifts extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  Unique identifier of the user */
        public int $user_id,
        /**
         * @var  bool|null  Pass <em>True</em> to exclude gifts that can be purchased an unlimited number of
         * times
         */
        public ?bool $exclude_unlimited,
        /**
         * @var  bool|null  Pass <em>True</em> to exclude gifts that can be purchased a limited number of times
         * and can be upgraded to unique
         */
        public ?bool $exclude_limited_upgradable,
        /**
         * @var  bool|null  Pass <em>True</em> to exclude gifts that can be purchased a limited number of times
         * and can't be upgraded to unique
         */
        public ?bool $exclude_limited_non_upgradable,
        /**
         * @var  bool|null  Pass <em>True</em> to exclude gifts that were assigned from the TON blockchain and
         * can't be resold or transferred in Telegram
         */
        public ?bool $exclude_from_blockchain,
        /** @var  bool|null  Pass <em>True</em> to exclude unique gifts */
        public ?bool $exclude_unique,
        /**
         * @var  bool|null  Pass <em>True</em> to sort results by gift price instead of send date. Sorting is
         * applied before pagination.
         */
        public ?bool $sort_by_price,
        /**
         * @var  string|null  Offset of the first entry to return as received from the previous request; use an
         * empty string to get the first chunk of results
         */
        public ?string $offset,
        /** @var  int|null  The maximum number of gifts to be returned; 1-100. Defaults to 100. */
        public ?int $limit,
    ) {
    }
}
