<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * UnhideGeneralForumTopic
 *
 * Use this method to unhide the 'General' topic in a forum supergroup chat. The
 * bot must be an administrator in the chat for this to work and must have the
 * can_manage_topics administrator rights. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class UnhideGeneralForumTopic extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target
         * supergroup (in the format @supergroupusername)
         */
        public int|string $chat_id,
    ) {
    }
}
