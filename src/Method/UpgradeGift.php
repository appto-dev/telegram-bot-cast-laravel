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
class UpgradeGift extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier of the business connection */
        public string $business_connection_id,
        /** @var  string  Unique identifier of the regular gift that should be upgraded to a unique one */
        public string $owned_gift_id,
        /**
         * @var  bool|null  Pass <em>True</em> to keep the original gift text, sender and receiver in the
         * upgraded gift
         */
        public ?bool $keep_original_details,
        /**
         * @var  int|null  The amount of Telegram Stars that will be paid for the upgrade from the business
         * account balance. If <code>gift.prepaid_upgrade_star_count > 0</code>, then pass 0, otherwise, the
         * <em>can_transfer_stars</em> business bot right is required and <code>gift.upgrade_star_count</code>
         * must be passed.
         */
        public ?int $star_count,
    ) {
    }
}
