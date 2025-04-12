<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a story area pointing to an HTTP or tg:// link. Currently, a story can
 * have up to 3 link areas.
 */
final class StoryAreaTypeLink extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the area, always "link"
         * @var string
         */
        public string $type,
        /**
         * HTTP or tg:// URL to be opened when the area is clicked
         * @var string
         */
        public string $url,
    ) {
    }
}
