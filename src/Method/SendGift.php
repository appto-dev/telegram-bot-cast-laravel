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
class SendGift extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  int|null  Required if <em>chat_id</em> is not specified. Unique identifier of the target user
         * who will receive the gift.
         */
        public ?int $user_id,
        /**
         * @var  int|string|null  Required if <em>user_id</em> is not specified. Unique identifier for the chat
         * or username of the channel (in the format <code>@username</code>) that will receive the gift.
         */
        public int|string|null $chat_id,
        /** @var  string  Identifier of the gift; limited gifts can't be sent to channel chats */
        public string $gift_id,
        /**
         * @var  bool|null  Pass <em>True</em> to pay for the gift upgrade from the bot's balance, thereby
         * making the upgrade free for the receiver
         */
        public ?bool $pay_for_upgrade,
        /** @var  string|null  Text that will be shown along with the gift; 0-128 characters */
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
