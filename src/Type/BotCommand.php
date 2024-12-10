<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a bot command.
 */
final class BotCommand extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Text of the command; 1-32 characters. Can contain only lowercase English
         * letters, digits and underscores.
         * @var string
         */
        public string $command,
        /**
         * Description of the command; 1-256 characters.
         * @var string
         */
        public string $description,
    ) {
    }
}
