<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes a profile photo to set. Currently, it can be one of
 *  - <a href="#inputprofilephotostatic">InputProfilePhotoStatic</a>
 *  - <a href="#inputprofilephotoanimated">InputProfilePhotoAnimated</a>
 */
final class InputProfilePhoto extends Data implements TelegramTypeInterface
{
}
