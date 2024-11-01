<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents the bot's name.
 *
 * @version Telegram Bot API 7.11
 */
final class BotName extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The bot's name
         * @var string
         */
        public string $name,
    ) {
    }
}
