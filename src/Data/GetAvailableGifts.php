<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Returns the list of gifts that can be sent by the bot to users and channel
 * chats. Requires no parameters. Returns a <a
 * href="https://core.telegram.org/bots/api#gifts">Gifts</a> object.
 */
final class GetAvailableGifts extends Data implements TelegramBotData
{
}
