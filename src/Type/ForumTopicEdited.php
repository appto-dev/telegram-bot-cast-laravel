<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * ForumTopicEdited
 *
 * This object represents a service message about an edited forum topic.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ForumTopicEdited extends Dto implements TypeInterface
{
    public function __construct(
        /** New name of the topic, if it was edited */
        public ?string $name,
        /**
         * New identifier of the custom emoji shown as the topic icon, if it was
         * edited; an empty string if the icon was removed
         */
        public ?string $icon_custom_emoji_id,
    ) {
    }
}
