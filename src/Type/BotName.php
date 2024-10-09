<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents the bot's name.
 *
 * @version Telegram Bot API 7.10
 */
final class BotName extends Data implements TelegramTypeContract
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
