<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes that no specific value for the menu button was set.
 *
 * @version Telegram Bot API 7.10
 */
final class MenuButtonDefault extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the button, must be default
         * @var string
         */
        public string $type = 'default',
    ) {
    }
}
