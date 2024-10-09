<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about the creation of a scheduled
 * giveaway.
 *
 * @version Telegram Bot API 7.10
 */
final class GiveawayCreated extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * The number of Telegram Stars to be split between giveaway winners; for Telegram
         * Star giveaways only
         * @var int|null
         */
        public ?int $prize_star_count,
    ) {
    }
}
