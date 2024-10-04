<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ForumTopic;
use Spatie\LaravelData\Data;

/**
 * CreateForumTopic
 *
 * Use this method to create a topic in a forum supergroup chat. The bot must be an
 * administrator in the chat for this to work and must have the can_manage_topics
 * administrator rights. Returns information about the created topic as a
 * ForumTopic object.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class CreateForumTopic extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ForumTopic::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target
         * supergroup (in the format @supergroupusername)
         */
        public int|string $chat_id,
        /** Topic name, 1-128 characters */
        public string $name,
        /**
         * Color of the topic icon in RGB format. Currently, must be one of
         * 7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192
         * (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F)
         */
        public ?int $icon_color,
        /**
         * Unique identifier of the custom emoji shown as the topic icon. Use
         * getForumTopicIconStickers to get all allowed custom emoji identifiers.
         */
        public ?string $icon_custom_emoji_id,
    ) {
    }
}