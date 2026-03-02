<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\MessageEntity;
use Appto\TelegramBot\Data\StoryArea;
use Appto\TelegramBot\Interfaces\InputStoryContent;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Posts a story on behalf of a managed business account. Requires the <em>can_manage_stories</em> business bot
 * right. Returns <a href="https://core.telegram.org/bots/api#story">Story</a> on success.
 */
final class PostStory extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /** Content of the story */
        public InputStoryContent $content,
        /**
         * Period after which the story is moved to the archive, in seconds; must be one of <code>6 * 3600</code>,
         * <code>12 * 3600</code>, <code>86400</code>, or <code>2 * 86400</code>
         */
        public int $active_period,
        /** Caption of the story, 0-2048 characters after entities parsing */
        public ?string $caption,
        /**
         * Mode for parsing entities in the story caption. See <a href="#formatting-options">formatting options</a> for
         * more details.
         */
        public ?string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the caption, which can be specified instead of
         * <em>parse_mode</em>
         * @var array<MessageEntity>
         */
        public ?array $caption_entities,
        /**
         * A JSON-serialized list of clickable areas to be shown on the story
         * @var array<StoryArea>
         */
        public ?array $areas,
        /** Pass <em>True</em> to keep the story accessible after it expires */
        public ?bool $post_to_chat_page,
        /** Pass <em>True</em> if the content of the story must be protected from forwarding and screenshotting */
        public ?bool $protect_content,
    ) {
    }
}
