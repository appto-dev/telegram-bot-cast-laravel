<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\MessageEntity;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class GiftPremiumSubscription extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  Unique identifier of the target user who will receive a Telegram Premium subscription */
        public int $user_id,
        /**
         * @var  int  Number of months the Telegram Premium subscription will be active for the user; must be
         * one of 3, 6, or 12
         */
        public int $month_count,
        /**
         * @var  int  Number of Telegram Stars to pay for the Telegram Premium subscription; must be 1000 for 3
         * months, 1500 for 6 months, and 2500 for 12 months
         */
        public int $star_count,
        /**
         * @var  string|null  Text that will be shown along with the service message about the subscription;
         * 0-128 characters
         */
        public ?string $text,
        /**
         * @var  string|null  Mode for parsing entities in the text. See
         * <a href="#formatting-options">formatting options</a> for more details. Entities other than "bold",
         * "italic", "underline", "strikethrough", "spoiler", "custom_emoji", and "date_time" are ignored.
         */
        public ?string $text_parse_mode,
        /**
         * @var  MessageEntity[]|null  A JSON-serialized list of special entities that appear in the gift text.
         * It can be specified instead of <em>text_parse_mode</em>. Entities other than "bold", "italic",
         * "underline", "strikethrough", "spoiler", "custom_emoji", and "date_time" are ignored.
         */
        public ?array $text_entities,
    ) {
    }
}
