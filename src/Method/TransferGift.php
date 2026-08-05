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
class TransferGift extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier of the business connection */
        public string $business_connection_id,
        /** @var  string  Unique identifier of the regular gift that should be transferred */
        public string $owned_gift_id,
        /**
         * @var  int  Unique identifier of the chat which will own the gift. The chat must be active in the
         * last 24 hours.
         */
        public int $new_owner_chat_id,
        /**
         * @var  int|null  The amount of Telegram Stars that will be paid for the transfer from the business
         * account balance. If positive, then the <em>can_transfer_stars</em> business bot right is required.
         */
        public ?int $star_count,
    ) {
    }
}
