<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\MenuButton;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes that no specific value for the menu button was set.
 */
final class MenuButtonDefault extends Data implements TelegramBotData, MenuButton
{
    public function __construct(
        /** Type of the button, must be default */
        public string $type,
    ) {
    }
}
