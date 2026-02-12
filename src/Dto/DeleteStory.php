<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Deletes a story previously posted by the bot on behalf of a managed business
 * account. Requires the <em>can_manage_stories</em> business bot right. Returns
 * <em>True</em> on success.
 */
final class DeleteStory extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /** Unique identifier of the story to delete */
        public int $story_id,
    ) {
    }
}
