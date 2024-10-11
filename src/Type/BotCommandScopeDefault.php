<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents the default <a href="#botcommandscope">scope</a> of bot commands.
 * Default commands are used if no commands with a <a
 * href="#determining-list-of-commands">narrower scope</a> are specified for the
 * user.
 *
 * @version Telegram Bot API 7.10
 */
final class BotCommandScopeDefault extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Scope type, must be default
         * @var string
         */
        public string $type = 'default',
    ) {
    }
}
