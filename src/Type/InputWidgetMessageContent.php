<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to work in
 * <a href="/bots/inline">inline mode</a>.Please see our
 * <a href="/bots/inline">Introduction to Inline bots</a> for more details.
 * To enable this option, send the /setinline command to
 * <a href="https://t.me/botfather">@BotFather</a> and provide the placeholder text that the user will
 * see in the input field after typing your bot's name, or use the parameters
 * <em>supports_inline_queries</em> and <em>inline_query_placeholder</em> of the method
 * <a href="#setmysettings">setMySettings</a>.
 */
class InputWidgetMessageContent extends Data implements TelegramType, InputMessageContent
{
    public function __construct(
        /**
         * @var  string  HTML code of the widget, 1-32768 bytes. The code must not exceed 4096 bytes when
         * compressed by zlib with the maximum compression level.
         */
        public string $html,
        /**
         * @var  int|null  Width of the widget in logical pixels; omit if the widget must occupy the whole
         * width of the message bubble. The width is clamped by the app to the range from 200 to the maximum
         * width of the message bubble.
         */
        public ?int $width,
        /**
         * @var  int|null  Height of the widget in logical pixels; omit if the height of the widget isn't
         * fixed. The height is clamped by the app to the range 50-600.
         */
        public ?int $height,
        /**
         * @var  string|null  Public data of the widget, 0-1024 bytes, which will be available wherever the
         * widget is shown. If the widget is shared, then all messages with it will have the same public data.
         */
        public ?string $public_data,
        /** @var  string|null  Data of the widget, which is specific to the message, 0-1024 bytes */
        public ?string $chat_data,
        /** @var  string|null  Widget caption, 0-1024 characters after entities parsing */
        public ?string $caption,
        /**
         * @var  string|null  Mode for parsing entities in the widget caption. See formatting options for more
         * details.
         */
        public ?string $parse_mode,
        /**
         * @var  MessageEntity[]|null  List of special entities that appear in the caption, which can be
         * specified instead of parse_mode
         */
        public ?array $caption_entities,
        /** @var  bool|null  Pass True if the caption must be shown above the widget */
        public ?bool $show_caption_above_media,
        /** @var  bool|null  Pass True to allow the widget to send queries to the bot */
        public ?bool $allow_queries,
        /**
         * @var  bool|null  Pass True to create a shared widget. Each message sent from the result creates a
         * separate shared widget, whose identifier is received by the bot only in the field widget_id of
         * queries from the widget. To send an existing shared widget in response to an inline query, use
         * InputSharedWidgetMessageContent instead.
         */
        public ?bool $is_shared,
    ) {
    }
}
