<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Removes the profile photo of the bot. Requires no parameters. Returns
 * <em>True</em> on success.
 */
final class RemoveMyProfilePhoto extends Data implements TelegramMethodInterface
{
}
