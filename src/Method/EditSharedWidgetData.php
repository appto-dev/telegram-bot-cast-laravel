<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * The following methods allow you to change an existing message in the message history instead of
 * sending a new one with a result of an action. This is most useful for messages with
 * <a href="/bots/features#inline-keyboards">inline keyboards</a> using callback queries, but can also
 * help reduce clutter in conversations with regular chat bots.
 * Please note, that it is currently only possible to edit messages without <em>reply_markup</em> or
 * with <a href="/bots/features#inline-keyboards">inline keyboards</a>.
 */
class EditSharedWidgetData extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier of the shared widget */
        public string $widget_id,
        /**
         * @var  string  New public data of the widget, 0-1024 bytes; pass an empty string to remove the public
         * data
         */
        public string $public_data,
        /**
         * @var  int|null  The maximum amount of time in seconds that the public data of the widget may be
         * cached client-side; 5-3600. If omitted, then the current value is kept, which is 30 by default.
         */
        public ?int $cache_time,
    ) {
    }
}
