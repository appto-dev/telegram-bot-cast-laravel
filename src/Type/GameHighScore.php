<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents one row of the high scores table for a game.
 *
 * @version Telegram Bot API 7.10
 */
final class GameHighScore extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Position in high score table for the game
         * @var int
         */
        public int $position,
        /**
         * User
         * @var User
         */
        public User $user,
        /**
         * Score
         * @var int
         */
        public int $score,
    ) {
    }
}
