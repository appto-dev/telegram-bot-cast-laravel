<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * InputMedia
 *
 * This object represents the content of a media message to be sent. It should be
 * one of
 *  - InputMediaAnimation
 *  - InputMediaDocument
 *  - InputMediaAudio
 *  -
 * InputMediaPhoto
 *  - InputMediaVideo
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class InputMedia extends Dto implements TypeInterface
{
}
