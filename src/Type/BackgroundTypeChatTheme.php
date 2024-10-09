<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * The background is taken directly from a built-in chat theme.
 *
 * @version Telegram Bot API 7.10
 */
final class BackgroundTypeChatTheme extends Data implements TelegramTypeContract
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
