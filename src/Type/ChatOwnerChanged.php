<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about an ownership change in the chat.
 */
final class ChatOwnerChanged extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The new owner of the chat
         * @var User
         */
        public User $new_owner,
    ) {
    }
}
