<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Removes the profile photo of the bot. Requires no parameters. Returns
 * <em>True</em> on success.
 */
final class RemoveMyProfilePhoto extends Dto implements TelegramBotDto
{
}
