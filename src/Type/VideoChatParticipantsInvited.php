<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about new members invited to a video
 * chat.
 */
final class VideoChatParticipantsInvited extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * New members that were invited to the video chat
         * @var User[]
         */
        public array $users,
    ) {
    }
}
