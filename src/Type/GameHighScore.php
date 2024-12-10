<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents one row of the high scores table for a game.
 */
final class GameHighScore extends Data implements TelegramTypeInterface
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
