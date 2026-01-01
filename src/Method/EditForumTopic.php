<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to edit name and icon of a topic in a forum supergroup chat or a
 * private chat with a user. In the case of a supergroup chat the bot must be an
 * administrator in the chat for this to work and must have the
 * <em>can_manage_topics</em> administrator rights, unless it is the creator of the
 * topic. Returns <em>True</em> on success.
 */
final class EditForumTopic extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format <code>@supergroupusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread of the forum topic
         * @var int
         */
        public int $message_thread_id,
        /**
         * New topic name, 0-128 characters. If not specified or empty, the current name of
         * the topic will be kept
         * @var string
         */
        public ?string $name,
        /**
         * New unique identifier of the custom emoji shown as the topic icon. Use <a
         * href="#getforumtopiciconstickers">getForumTopicIconStickers</a> to get all
         * allowed custom emoji identifiers. Pass an empty string to remove the icon. If
         * not specified, the current icon will be kept
         * @var string
         */
        public ?string $icon_custom_emoji_id,
    ) {
    }
}
