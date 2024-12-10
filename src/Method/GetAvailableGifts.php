<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Returns the list of gifts that can be sent by the bot to users. Requires no
 * parameters. Returns a <a href="#gifts">Gifts</a> object.
 */
final class GetAvailableGifts extends Data implements TelegramMethodInterface
{
}
