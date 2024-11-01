<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a chat background.
 *
 * @version Telegram Bot API 7.11
 */
final class ChatBackground extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the background
         * @var BackgroundType
         */
        public BackgroundType $type,
    ) {
    }
}
