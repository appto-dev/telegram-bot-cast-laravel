<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InputStoryContent;
use Appto\TelegramBot\Type\MessageEntity;
use Appto\TelegramBot\Type\StoryArea;
use Spatie\LaravelData\Data;

/**
 * Edits a story previously posted by the bot on behalf of a managed business
 * account. Requires the <em>can_manage_stories</em> business bot right. Returns <a
 * href="#story">Story</a> on success.
 */
final class EditStory extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * Unique identifier of the story to edit
         * @var int
         */
        public int $story_id,
        /**
         * Content of the story
         * @var InputStoryContent
         */
        public InputStoryContent $content,
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
    ) {
    }
}
