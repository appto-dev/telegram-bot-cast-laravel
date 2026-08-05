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
class CreateForumTopic extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target supergroup in the
         * format <code>@username</code>
         */
        public int|string $chat_id,
        /** @var  string  Topic name, 1-128 characters */
        public string $name,
        /**
         * @var  int|null  Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0),
         * 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047
         * (0xFB6F5F).
         */
        public ?int $icon_color,
        /**
         * @var  string|null  Unique identifier of the custom emoji shown as the topic icon. Use
         * <a href="#getforumtopiciconstickers">getForumTopicIconStickers</a> to get all allowed custom emoji
         * identifiers.
         */
        public ?string $icon_custom_emoji_id,
    ) {
    }
}
