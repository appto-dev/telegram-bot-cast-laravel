<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about a video chat started in the chat.
 * Currently holds no information.
 *
 * @version Telegram Bot API 7.10
 */
final class VideoChatStarted extends Data implements TelegramTypeContract
{
}
