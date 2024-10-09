<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to close an open topic in a forum supergroup chat. The bot must
 * be an administrator in the chat for this to work and must have the
 * <em>can_manage_topics</em> administrator rights, unless it is the creator of the
 * topic. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class CloseForumTopic extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format @supergroupusername)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread of the forum topic
         * @var int
         */
        public int $message_thread_id,
    ) {
    }
}
