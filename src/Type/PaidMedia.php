<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes paid media. Currently, it can be one of
 *  - <a href="#paidmediapreview">PaidMediaPreview</a>
 *  - <a href="#paidmediaphoto">PaidMediaPhoto</a>
 *  - <a href="#paidmediavideo">PaidMediaVideo</a>
 */
final class PaidMedia extends Data implements TelegramTypeInterface
{
}
