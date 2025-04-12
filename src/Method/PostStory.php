<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InputStoryContent;
use Appto\TelegramBot\Type\MessageEntity;
use Appto\TelegramBot\Type\StoryArea;
use Spatie\LaravelData\Data;

/**
 * Posts a story on behalf of a managed business account. Requires the
 * <em>can_manage_stories</em> business bot right. Returns <a
 * href="#story">Story</a> on success.
 */
final class PostStory extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * Content of the story
         * @var InputStoryContent
         */
        public InputStoryContent $content,
        /**
         * Period after which the story is moved to the archive, in seconds; must be one of
         * <code>6 * 3600</code>, <code>12 * 3600</code>, <code>86400</code>, or <code>2 *
         * 86400</code>
         * @var int
         */
        public int $active_period,
        /**
         * Caption of the story, 0-2048 characters after entities parsing
         * @var string
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the story caption. See <a
         * href="#formatting-options">formatting options</a> for more details.
         * @var string
         */
        public ?string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the caption, which can
         * be specified instead of <em>parse_mode</em>
         * @var MessageEntity[]
         */
        public ?array $caption_entities,
        /**
         * A JSON-serialized list of clickable areas to be shown on the story
         * @var StoryArea[]
         */
        public ?array $areas,
        /**
         * Pass <em>True</em> to keep the story accessible after it expires
         * @var bool
         */
        public ?bool $post_to_chat_page,
        /**
         * Pass <em>True</em> if the content of the story must be protected from forwarding
         * and screenshotting
         * @var bool
         */
        public ?bool $protect_content,
    ) {
    }
}
