<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about a chat being removed from a community. Currently holds no information.
 */
final class CommunityChatRemoved extends Data implements TelegramBotData
{
}
