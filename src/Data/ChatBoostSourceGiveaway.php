<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ChatBoostSource;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The boost was obtained by the creation of a Telegram Premium or a Telegram Star giveaway. This boosts the chat
 * 4 times for the duration of the corresponding Telegram Premium subscription for Telegram Premium giveaways and
 * <em>prize_star_count</em> / 500 times for one year for Telegram Star giveaways.
 */
final class ChatBoostSourceGiveaway extends Data implements TelegramBotData, ChatBoostSource
{
    public function __construct(
        /** Source of the boost, always "giveaway" */
        public string $source,
        /**
         * Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0
         * if the message isn't sent yet.
         */
        public int $giveaway_message_id,
        /** User that won the prize in the giveaway if any; for Telegram Premium giveaways only */
        public ?User $user,
        /** The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only */
        public ?int $prize_star_count,
        /** True, if the giveaway was completed, but there was no user to win the prize */
        public ?true $is_unclaimed,
    ) {
    }
}
