<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about a forum topic closed in the chat.
 * Currently holds no information.
 */
final class ForumTopicClosed extends Data implements TelegramTypeInterface
{
}
