<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Support\Casts\InputStoryContentCast;
use Appto\TelegramBot\Type\InputStoryContent;
use Appto\TelegramBot\Type\MessageEntity;
use Appto\TelegramBot\Type\StoryArea;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class PostStory extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier of the business connection */
        public string $business_connection_id,
        /** @var  InputStoryContent  Content of the story */
        #[WithCast(InputStoryContentCast::class)]
        public InputStoryContent $content,
        /**
         * @var  int  Period after which the story is moved to the archive, in seconds; must be one of
         * <code>6 * 3600</code>, <code>12 * 3600</code>, <code>86400</code>, or <code>2 * 86400</code>
         */
        public int $active_period,
        /** @var  string|null  Caption of the story, 0-2048 characters after entities parsing */
        public ?string $caption,
        /**
         * @var  string|null  Mode for parsing entities in the story caption. See
         * <a href="#formatting-options">formatting options</a> for more details.
         */
        public ?string $parse_mode,
        /**
         * @var  MessageEntity[]|null  A JSON-serialized list of special entities that appear in the caption,
         * which can be specified instead of <em>parse_mode</em>
         */
        public ?array $caption_entities,
        /** @var  StoryArea[]|null  A JSON-serialized list of clickable areas to be shown on the story */
        public ?array $areas,
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
