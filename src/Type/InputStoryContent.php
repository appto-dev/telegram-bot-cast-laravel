<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes the content of a story to post. Currently, it can be one
 * of
 *  - <a href="#inputstorycontentphoto">InputStoryContentPhoto</a>
 *  - <a href="#inputstorycontentvideo">InputStoryContentVideo</a>
 */
final class InputStoryContent extends Data implements TelegramTypeInterface
{
}
