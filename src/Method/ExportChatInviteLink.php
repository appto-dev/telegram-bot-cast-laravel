<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use Spatie\LaravelData\Data;

/**
 * ExportChatInviteLink
 *
 * Use this method to generate a new primary invite link for a chat; any previously
 * generated primary link is revoked. The bot must be an administrator in the chat
 * for this to work and must have the appropriate administrator rights. Returns the
 * new invite link as String on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ExportChatInviteLink extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = 'string';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target
         * channel (in the format @channelusername)
         */
        public int|string $chat_id,
    ) {
    }
}