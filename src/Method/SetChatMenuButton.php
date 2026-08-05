<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Support\Casts\MenuButtonCast;
use Appto\TelegramBot\Type\MenuButton;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class SetChatMenuButton extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  int|null  Unique identifier for the target private chat. If not specified, the bot's default
         * menu button will be changed.
         */
        public ?int $chat_id,
        /**
         * @var  MenuButton|null  A JSON-serialized object for the bot's new menu button. Defaults to
         * <a href="#menubuttondefault">MenuButtonDefault</a>.
         */
        #[WithCast(MenuButtonCast::class)]
        public ?MenuButton $menu_button,
    ) {
    }
}
