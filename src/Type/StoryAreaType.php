<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes the type of a clickable area on a story. Currently, it can be one of
 *  - <a href="#storyareatypelocation">StoryAreaTypeLocation</a>
 *  - <a href="#storyareatypesuggestedreaction">StoryAreaTypeSuggestedReaction</a>
 *  - <a href="#storyareatypelink">StoryAreaTypeLink</a>
 *  - <a href="#storyareatypeweather">StoryAreaTypeWeather</a>
 *  - <a href="#storyareatypeuniquegift">StoryAreaTypeUniqueGift</a>
 */
final class StoryAreaType extends Data implements TelegramTypeInterface
{
}
