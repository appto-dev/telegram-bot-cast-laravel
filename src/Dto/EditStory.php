<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\MessageEntity;
use Appto\TelegramBot\Data\StoryArea;
use Appto\TelegramBot\Interfaces\InputStoryContent;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Edits a story previously posted by the bot on behalf of a managed business account. Requires the
 * <em>can_manage_stories</em> business bot right. Returns <a
 * href="https://core.telegram.org/bots/api#story">Story</a> on success.
 */
final class EditStory extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /** Unique identifier of the story to edit */
        public int $story_id,
        /** Content of the story */
        public InputStoryContent $content,
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
         */
        public ?MessageEntity $caption_entities,
        /** A JSON-serialized list of clickable areas to be shown on the story */
        public ?StoryArea $areas,
    ) {
    }
}
