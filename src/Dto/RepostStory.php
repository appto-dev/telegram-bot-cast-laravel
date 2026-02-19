<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Reposts a story on behalf of a business account from another business account. Both business accounts must be managed by
 * the same bot, and the story on the source account must have been posted (or reposted) by the bot. Requires the
 * <em>can_manage_stories</em> business bot right for both business accounts. Returns <a
 * href="https://core.telegram.org/bots/api#story">Story</a> on success.
 */
final class RepostStory extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /** Unique identifier of the chat which posted the story that should be reposted */
        public int $from_chat_id,
        /** Unique identifier of the story that should be reposted */
        public int $from_story_id,
        /**
         * Period after which the story is moved to the archive, in seconds; must be one of <code>6 * 3600</code>, <code>12 *
         * 3600</code>, <code>86400</code>, or <code>2 * 86400</code>
         */
        public int $active_period,
        /** Pass <em>True</em> to keep the story accessible after it expires */
        public ?bool $post_to_chat_page,
        /** Pass <em>True</em> if the content of the story must be protected from forwarding and screenshotting */
        public ?bool $protect_content,
    ) {
    }
}
