<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object describes the origin of a message. It can be one of
 *  - <a href="#messageoriginuser">MessageOriginUser</a>
 *  - <a href="#messageoriginhiddenuser">MessageOriginHiddenUser</a>
 *  - <a href="#messageoriginchat">MessageOriginChat</a>
 *  - <a href="#messageoriginchannel">MessageOriginChannel</a>
 *
 * @version Telegram Bot API 7.10
 */
final class MessageOrigin extends Data implements TelegramTypeContract
{
}
