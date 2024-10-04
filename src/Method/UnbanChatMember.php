<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * UnbanChatMember
 *
 * Use this method to unban a previously banned user in a supergroup or channel.
 * The user will not return to the group or channel automatically, but will be able
 * to join via link, etc. The bot must be an administrator for this to work. By
 * default, this method guarantees that after the call the user is not a member of
 * the chat, but will be able to join it. So if the user is a member of the chat
 * they will also be removed from the chat. If you don't want this, use the
 * parameter only_if_banned. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class UnbanChatMember extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /**
         * Unique identifier for the target group or username of the target
         * supergroup or channel (in the format @channelusername)
         */
        public int|string $chat_id,
        /** Unique identifier of the target user */
        public int $user_id,
        /** Do nothing if the user is not banned */
        public ?bool $only_if_banned,
    ) {
    }
}