<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about an edited forum topic.
 *
 * @version Telegram Bot API 7.10
 */
final class ForumTopicEdited extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * New name of the topic, if it was edited
         * @var string
         */
        public ?string $name,
        /**
         * New identifier of the custom emoji shown as the topic icon, if it was edited; an
         * empty string if the icon was removed
         * @var string
         */
        public ?string $icon_custom_emoji_id,
    ) {
    }
}
