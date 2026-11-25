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
class InputRichMessageContent extends Data implements TelegramType, InputMessageContent
{
    public function __construct(
        /**
         * @var  InputRichMessage  The message to be sent. Only previously uploaded files may be used in the
         * message.
         */
        public InputRichMessage $rich_message,
    ) {
    }
}
