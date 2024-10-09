<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object describes the type of a background. Currently, it can be one of
 *  - <a href="#backgroundtypefill">BackgroundTypeFill</a>
 *  - <a href="#backgroundtypewallpaper">BackgroundTypeWallpaper</a>
 *  - <a href="#backgroundtypepattern">BackgroundTypePattern</a>
 *  - <a href="#backgroundtypechattheme">BackgroundTypeChatTheme</a>
 *
 * @version Telegram Bot API 7.10
 */
final class BackgroundType extends Data implements TelegramTypeContract
{
}
