<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * MenuButtonDefault
 *
 * Describes that no specific value for the menu button was set.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class MenuButtonDefault extends Dto implements TypeInterface
{
    public function __construct(
        /** Type of the button, must be default */
        public string $type,
    ) {
    }
}
