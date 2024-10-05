<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * ReactionCount
 *
 * Represents a reaction added to a message along with the number of times it was
 * added.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ReactionCount extends Data implements TypeInterface
{
    public function __construct(
        /** Type of the reaction */
        public ReactionType $type,
        /** Number of times the reaction was added */
        public int $total_count,
    ) {
    }
}
