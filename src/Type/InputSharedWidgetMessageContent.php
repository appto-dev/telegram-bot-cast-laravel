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
 * see in the input field after typing your bot's name.
 */
class InputSharedWidgetMessageContent extends Data implements TelegramType, InputMessageContent
{
    public function __construct(
        /** @var  string  Unique identifier of the shared widget created by the bot */
        public string $widget_id,
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
    ) {
    }
}
