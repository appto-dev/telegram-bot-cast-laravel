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
class CreateChatSubscriptionInviteLink extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  int|string  Unique identifier for the target channel chat or username of the target channel in
         * the format <code>@username</code>
         */
        public int|string $chat_id,
        /** @var  string|null  Invite link name; 0-32 characters */
        public ?string $name,
        /**
         * @var  int  The number of seconds the subscription will be active for before the next payment.
         * Currently, it must always be 2592000 (30 days).
         */
        public int $subscription_period,
        /**
         * @var  int  The amount of Telegram Stars a user must pay initially and after each subsequent
         * subscription period to be a member of the chat; 1-10000
         */
        public int $subscription_price,
    ) {
    }
}
