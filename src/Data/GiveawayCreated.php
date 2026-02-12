<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about the creation of a scheduled
 * giveaway.
 */
final class GiveawayCreated extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * The number of Telegram Stars to be split between giveaway winners; for Telegram
         * Star giveaways only
         */
        public ?int $prize_star_count,
    ) {
    }
}
