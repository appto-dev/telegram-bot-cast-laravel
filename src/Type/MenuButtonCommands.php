<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a menu button, which opens the bot's list of commands.
 *
 * @version Telegram Bot API 7.10
 */
final class MenuButtonCommands extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the button, must be commands
         * @var string
         */
        public string $type = 'commands',
    ) {
    }
}
