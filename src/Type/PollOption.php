<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * PollOption
 *
 * This object contains information about one answer option in a poll.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class PollOption extends Dto implements TypeInterface
{
    public function __construct(
        /** Option text, 1-100 characters */
        public string $text,
        /** Number of users that voted for this option */
        public int $voter_count,
    ) {
    }
}
