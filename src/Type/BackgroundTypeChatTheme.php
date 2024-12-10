<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The background is taken directly from a built-in chat theme.
 */
final class BackgroundTypeChatTheme extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the background, always "chat_theme"
         * @var string
         */
        public string $type,
        /**
         * Name of the chat theme, which is usually an emoji
         * @var string
         */
        public string $theme_name,
    ) {
    }
}
