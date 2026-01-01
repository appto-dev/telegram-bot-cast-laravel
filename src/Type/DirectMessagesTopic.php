<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a topic of a direct messages chat.
 */
final class DirectMessagesTopic extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier of the topic. This number may have more than 32 significant
         * bits and some programming languages may have difficulty/silent defects in
         * interpreting it. But it has at most 52 significant bits, so a 64-bit integer or
         * double-precision float type are safe for storing this identifier.
         * @var int
         */
        public int $topic_id,
        /**
         * Information about the user that created the topic. Currently, it is always
         * present
         * @var User
         */
        public ?User $user,
    ) {
    }
}
