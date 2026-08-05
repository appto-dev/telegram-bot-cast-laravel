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
class EditForumTopic extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target supergroup in the
         * format <code>@username</code>
         */
        public int|string $chat_id,
        /** @var  int  Unique identifier for the target message thread of the forum topic */
        public int $message_thread_id,
        /**
         * @var  string|null  New topic name, 0-128 characters. If not specified or empty, the current name of
         * the topic will be kept.
         */
        public ?string $name,
        /**
         * @var  string|null  New unique identifier of the custom emoji shown as the topic icon. Use
         * <a href="#getforumtopiciconstickers">getForumTopicIconStickers</a> to get all allowed custom emoji
         * identifiers. Pass an empty string to remove the icon. If not specified, the current icon will be
         * kept.
         */
        public ?string $icon_custom_emoji_id,
    ) {
    }
}
