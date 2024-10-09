<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object describes the paid media to be sent. Currently, it can be one of
 *  - <a href="#inputpaidmediaphoto">InputPaidMediaPhoto</a>
 *  - <a href="#inputpaidmediavideo">InputPaidMediaVideo</a>
 *
 * @version Telegram Bot API 7.10
 */
final class InputPaidMedia extends Data implements TelegramTypeContract
{
}