<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to get custom emoji stickers, which can be used as a forum topic
 * icon by any user. Requires no parameters. Returns an Array of <a
 * href="#sticker">Sticker</a> objects.
 *
 * @version Telegram Bot API 7.11
 */
final class GetForumTopicIconStickers extends Data implements TelegramMethodInterface
{
}
