<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * InputFile
 *
 * This object represents the contents of a file to be uploaded. Must be posted
 * using multipart/form-data in the usual way that files are uploaded via the
 * browser.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class InputFile extends Dto implements TypeInterface
{
}
