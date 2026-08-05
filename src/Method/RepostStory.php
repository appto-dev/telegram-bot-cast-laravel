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
class RepostStory extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier of the business connection */
        public string $business_connection_id,
        /** @var  int  Unique identifier of the chat which posted the story that should be reposted */
        public int $from_chat_id,
        /** @var  int  Unique identifier of the story that should be reposted */
        public int $from_story_id,
        /**
         * @var  int  Period after which the story is moved to the archive, in seconds; must be one of
         * <code>6 * 3600</code>, <code>12 * 3600</code>, <code>86400</code>, or <code>2 * 86400</code>
         */
        public int $active_period,
        /** @var  bool|null  Pass <em>True</em> to keep the story accessible after it expires */
        public ?bool $post_to_chat_page,
        /**
         * @var  bool|null  Pass <em>True</em> if the content of the story must be protected from forwarding
         * and screenshotting
         */
        public ?bool $protect_content,
    ) {
    }
}
