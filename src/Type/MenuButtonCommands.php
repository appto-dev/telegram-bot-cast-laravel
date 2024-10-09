<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a menu button, which opens the bot's list of commands.
 *
 * @version Telegram Bot API 7.10
 */
final class MenuButtonCommands extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the button, must be commands
         * @var string
         */
        public string $type,
    ) {
    }
}
