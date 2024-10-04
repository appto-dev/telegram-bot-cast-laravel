<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * ReopenForumTopic
 *
 * Use this method to reopen a closed topic in a forum supergroup chat. The bot
 * must be an administrator in the chat for this to work and must have the
 * can_manage_topics administrator rights, unless it is the creator of the topic.
 * Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ReopenForumTopic extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target
         * supergroup (in the format @supergroupusername)
         */
        public int|string $chat_id,
        /** Unique identifier for the target message thread of the forum topic */
        public int $message_thread_id,
    ) {
    }
}
