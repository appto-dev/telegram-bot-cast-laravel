<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes the way a background is filled based on the selected
 * colors. Currently, it can be one of
 *  - <a href="#backgroundfillsolid">BackgroundFillSolid</a>
 *  - <a href="#backgroundfillgradient">BackgroundFillGradient</a>
 *  - <a href="#backgroundfillfreeformgradient">BackgroundFillFreeformGradient</a>
 *
 * @version Telegram Bot API 7.11
 */
final class BackgroundFill extends Data implements TelegramTypeInterface
{
}
