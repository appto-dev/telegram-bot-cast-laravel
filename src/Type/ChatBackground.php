<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a chat background.
 *
 * @version Telegram Bot API 7.10
 */
final class ChatBackground extends Data implements TelegramTypeContract
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
