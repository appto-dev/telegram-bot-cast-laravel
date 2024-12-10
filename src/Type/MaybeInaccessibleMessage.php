<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes a message that can be inaccessible to the bot. It can be
 * one of
 *  - <a href="#message">Message</a>
 *  - <a href="#inaccessiblemessage">InaccessibleMessage</a>
 */
final class MaybeInaccessibleMessage extends Data implements TelegramTypeInterface
{
}
