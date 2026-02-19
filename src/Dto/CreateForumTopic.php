<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to create a topic in a forum supergroup chat or a private chat with a user. In the case of a supergroup
 * chat the bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em>
 * administrator right. Returns information about the created topic as a <a
 * href="https://core.telegram.org/bots/api#forumtopic">ForumTopic</a> object.
 */
final class CreateForumTopic extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format
         * <code>@supergroupusername</code>)
         */
        public int|string $chat_id,
        /** Topic name, 1-128 characters */
        public string $name,
        /**
         * Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331
         * (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F)
         */
        public ?int $icon_color,
        /**
         * Unique identifier of the custom emoji shown as the topic icon. Use <a
         * href="#getforumtopiciconstickers">getForumTopicIconStickers</a> to get all allowed custom emoji identifiers.
         */
        public ?string $icon_custom_emoji_id,
    ) {
    }
}
