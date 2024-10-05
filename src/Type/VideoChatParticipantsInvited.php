<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * VideoChatParticipantsInvited
 *
 * This object represents a service message about new members invited to a video
 * chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class VideoChatParticipantsInvited extends Data implements TypeInterface
{
    public function __construct(
        /**
         * New members that were invited to the video chat
         * @var array<User>
         */
        public array $users,
    ) {
    }
}
