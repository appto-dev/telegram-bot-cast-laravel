<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user. Requires no
 * parameters. Returns an Array of <a href="https://core.telegram.org/bots/api#sticker">Sticker</a> objects.
 */
final class GetForumTopicIconStickers extends Dto implements TelegramBotDto
{
}
