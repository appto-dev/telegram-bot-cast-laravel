<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class PollAnswer extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Unique poll identifier */
        public string $poll_id,
        /** @var  Chat|null  The chat that changed the answer to the poll, if the voter is anonymous */
        public ?Chat $voter_chat,
        /** @var  User|null  The user that changed the answer to the poll, if the voter isn't anonymous */
        public ?User $user,
        /** @var  int[]  0-based identifiers of chosen answer options. May be empty if the vote was retracted. */
        public array $option_ids,
        /**
         * @var  string[]  Persistent identifiers of the chosen answer options. May be empty if the vote was
         * retracted.
         */
        public array $option_persistent_ids,
    ) {
    }
}
