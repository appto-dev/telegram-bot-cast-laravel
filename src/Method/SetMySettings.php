<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On a successful call, a JSON
 * object containing the result will be returned.
 */
class SetMySettings extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  bool|null  Pass <em>True</em> to enable <a href="#inline-mode">inline mode</a> for the bot or
         * <em>False</em> to disable it
         */
        public ?bool $supports_inline_queries,
        /**
         * @var  string|null  New placeholder for inline queries, which is shown in the input field after the
         * bot's username. Pass an empty string to use the default placeholder.
         */
        public ?string $inline_query_placeholder,
        /**
         * @var  bool|null  Pass <em>True</em> to request the location of the user with every inline query to
         * the bot or <em>False</em> to stop requesting it
         */
        public ?bool $needs_inline_query_location,
        /**
         * @var  int|null  Denominator of the share of <a href="#choseninlineresult">chosen inline results</a>
         * received by the bot; the bot receives 1 out of <em>inline_feedback_share_denominator</em> chosen
         * results. Must be one of 1, 10, 100, or 1000. Pass 0 to stop receiving chosen inline results.
         */
        public ?int $inline_feedback_share_denominator,
        /**
         * @var  bool|null  Pass <em>True</em> to allow adding the bot to groups or <em>False</em> to disallow
         * it
         */
        public ?bool $can_join_groups,
        /**
         * @var  bool|null  Pass <em>True</em> to disable
         * <a href="/bots/features#privacy-mode">privacy mode</a> for the bot or <em>False</em> to enable it
         */
        public ?bool $can_read_all_group_messages,
        /**
         * @var  bool|null  Pass <em>True</em> to allow connecting the bot to user accounts to manage them or
         * <em>False</em> to disallow it
         */
        public ?bool $can_connect_to_business,
        /**
         * @var  bool|null  Pass <em>True</em> to allow creating other bots that will be controlled by the bot
         * or <em>False</em> to disallow it
         */
        public ?bool $can_manage_bots,
        /**
         * @var  bool|null  Pass <em>True</em> to allow guest queries to the bot from chats it isn't a member
         * of or <em>False</em> to disallow them
         */
        public ?bool $supports_guest_queries,
        /**
         * @var  bool|null  Pass <em>True</em> to allow assigning the bot to process join request queries or
         * <em>False</em> to disallow it
         */
        public ?bool $supports_join_request_queries,
        /**
         * @var  bool|null  Pass <em>True</em> to enable forum topic mode in private chats with the bot or
         * <em>False</em> to disable it
         */
        public ?bool $has_topics_enabled,
        /**
         * @var  bool|null  Pass <em>True</em> to allow users to create and delete topics in private chats with
         * the bot or <em>False</em> to disallow it
         */
        public ?bool $allows_users_to_create_topics,
        /**
         * @var  bool|null  Pass <em>True</em> to show topics in private chats with the bot in a sidebar or
         * <em>False</em> to stop showing them in a sidebar
         */
        public ?bool $has_topic_sidebar,
        /**
         * @var  bool|null  Pass <em>True</em> to allow the bot to communicate with other bots in groups,
         * private chats, and through business accounts or <em>False</em> to disallow it
         */
        public ?bool $can_communicate_with_bots,
        /**
         * @var  string|null  Mode in which the bot receives <a href="#callbackquery">callback queries</a> from
         * buttons in messages sent by the bot. Must be one of "default" (the field <em>message</em> is always
         * used and contains an <a href="#inaccessiblemessage">InaccessibleMessage</a> if the message is
         * inaccessible to the bot), "auto" (the field <em>inline_message_id</em> is used instead of the field
         * <em>message</em> if the message is inaccessible to the bot; the field <em>message</em> can still
         * contain an inaccessible message if the message has just been deleted), or "inline" (the field
         * <em>inline_message_id</em> is always used instead of the field <em>message</em>).
         */
        public ?string $callback_query_mode,
    ) {
    }
}
