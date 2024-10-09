<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about new members invited to a video
 * chat.
 *
 * @version Telegram Bot API 7.10
 */
final class VideoChatParticipantsInvited extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * New members that were invited to the video chat
         * @var array<User>
         */
        public User $users,
    ) {
    }
}
