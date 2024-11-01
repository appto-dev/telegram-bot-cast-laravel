<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about a video chat started in the chat.
 * Currently holds no information.
 *
 * @version Telegram Bot API 7.11
 */
final class VideoChatStarted extends Data implements TelegramTypeInterface
{
}
