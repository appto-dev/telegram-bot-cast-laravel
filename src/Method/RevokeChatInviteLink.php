<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ChatInviteLink;
use Spatie\LaravelData\Data;

/**
 * RevokeChatInviteLink
 *
 * Use this method to revoke an invite link created by the bot. If the primary link
 * is revoked, a new link is automatically generated. The bot must be an
 * administrator in the chat for this to work and must have the appropriate
 * administrator rights. Returns the revoked invite link as ChatInviteLink object.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class RevokeChatInviteLink extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ChatInviteLink::class;

    public function __construct(
        /**
         * Unique identifier of the target chat or username of the target channel
         * (in the format @channelusername)
         */
        public int|string $chat_id,
        /** The invite link to revoke */
        public string $invite_link,
    ) {
    }
}
