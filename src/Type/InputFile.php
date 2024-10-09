<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents the contents of a file to be uploaded. Must be posted
 * using multipart/form-data in the usual way that files are uploaded via the
 * browser.
 *
 * @version Telegram Bot API 7.10
 */
final class InputFile extends Data implements TelegramTypeContract
{
}
