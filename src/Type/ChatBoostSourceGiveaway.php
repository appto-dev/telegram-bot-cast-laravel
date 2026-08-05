<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChatBoostSourceGiveaway extends Data implements TelegramType, ChatBoostSource
{
    public function __construct(
        /** @var  string  Source of the boost, always "giveaway" */
        public string $source,
        /**
         * @var  int  Identifier of a message in the chat with the giveaway; the message could have been
         * deleted already. May be 0 if the message isn't sent yet.
         */
        public int $giveaway_message_id,
        /** @var  User|null  User that won the prize in the giveaway if any; for Telegram Premium giveaways only */
        public ?User $user,
        /**
         * @var  int|null  The number of Telegram Stars to be split between giveaway winners; for Telegram Star
         * giveaways only
         */
        public ?int $prize_star_count,
        /** @var  true|null  True, if the giveaway was completed, but there was no user to win the prize */
        public ?true $is_unclaimed,
    ) {
    }
}
