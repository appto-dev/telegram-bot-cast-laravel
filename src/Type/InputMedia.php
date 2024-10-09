<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents the content of a media message to be sent. It should be
 * one of
 *  - <a href="#inputmediaanimation">InputMediaAnimation</a>
 *  - <a href="#inputmediadocument">InputMediaDocument</a>
 *  - <a href="#inputmediaaudio">InputMediaAudio</a>
 *  - <a href="#inputmediaphoto">InputMediaPhoto</a>
 *  - <a href="#inputmediavideo">InputMediaVideo</a>
 *
 * @version Telegram Bot API 7.10
 */
final class InputMedia extends Data implements TelegramTypeContract
{
}
