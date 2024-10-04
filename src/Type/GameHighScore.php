<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * GameHighScore
 *
 * This object represents one row of the high scores table for a game.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class GameHighScore extends Dto implements TypeInterface
{
    public function __construct(
        /** Position in high score table for the game */
        public int $position,
        /** User */
        public User $user,
        /** Score */
        public int $score,
    ) {
    }
}
