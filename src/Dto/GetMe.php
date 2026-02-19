<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * A simple method for testing your bot's authentication token. Requires no parameters. Returns basic information about the
 * bot in form of a <a href="https://core.telegram.org/bots/api#user">User</a> object.
 */
final class GetMe extends Dto implements TelegramBotDto
{
}
