<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Describes that no specific value for the menu button was set.
 *
 * @version Telegram Bot API 7.10
 */
final class MenuButtonDefault extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the button, must be default
         * @var string
         */
        public string $type,
    ) {
    }
}
