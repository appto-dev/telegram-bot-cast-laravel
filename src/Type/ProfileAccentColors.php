<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * Profile accent colors
 *
 * Currently, the following colors in RGB format are in use for profile
 * backgrounds.
 *
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ProfileAccentColors extends Dto implements TypeInterface
{
    public function __construct()
    {
    }
}
