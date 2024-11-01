<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes the paid media to be sent. Currently, it can be one of
 *  - <a href="#inputpaidmediaphoto">InputPaidMediaPhoto</a>
 *  - <a href="#inputpaidmediavideo">InputPaidMediaVideo</a>
 *
 * @version Telegram Bot API 7.11
 */
final class InputPaidMedia extends Data implements TelegramTypeInterface
{
}
