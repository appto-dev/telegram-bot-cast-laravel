<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * Accent colors
 *
 * Colors with identifiers 0 (red), 1 (orange), 2 (purple/violet), 3 (green), 4
 * (cyan), 5 (blue), 6 (pink) can be customized by app themes. Additionally, the
 * following colors in RGB format are currently in use.
 *
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class AccentColors extends Dto implements TypeInterface
{
    public function __construct()
    {
    }
}