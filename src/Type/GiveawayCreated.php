<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about the creation of a scheduled
 * giveaway.
 *
 * @version Telegram Bot API 7.10
 */
final class GiveawayCreated extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The number of Telegram Stars to be split between giveaway winners; for Telegram
         * Star giveaways only
         * @var int
         */
        public ?int $prize_star_count,
    ) {
    }
}
