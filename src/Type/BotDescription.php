<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents the bot's description.
 *
 * @version Telegram Bot API 7.10
 */
final class BotDescription extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The bot's description
         * @var string
         */
        public string $description,
    ) {
    }
}
