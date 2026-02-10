<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about the chat owner leaving the chat.
 */
final class ChatOwnerLeft extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The user which will be the new owner of the chat if the previous owner does not
         * return to the chat
         * @var User
         */
        public ?User $new_owner,
    ) {
    }
}
