<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class SendChatAction extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  string|null  Unique identifier of the business connection on behalf of which the action will
         * be sent
         */
        public ?string $business_connection_id,
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target bot or supergroup
         * in the format <code>@username</code>. Channel chats and channel direct messages chats aren't
         * supported.
         */
        public int|string $chat_id,
        /**
         * @var  int|null  Unique identifier for the target message thread or topic of a forum; for supergroups
         * and private chats of bots with forum topic mode enabled only
         */
        public ?int $message_thread_id,
        /**
         * @var  string  Type of action to broadcast. Choose one, depending on what the user is about to
         * receive: <em>typing</em> for <a href="#sendmessage">text messages</a>, <em>upload_photo</em> for
         * <a href="#sendphoto">photos</a>, <em>record_video</em> or <em>upload_video</em> for
         * <a href="#sendvideo">videos</a>, <em>record_voice</em> or <em>upload_voice</em> for
         * <a href="#sendvoice">voice notes</a>, <em>upload_document</em> for
         * <a href="#senddocument">general files</a>, <em>choose_sticker</em> for
         * <a href="#sendsticker">stickers</a>, <em>find_location</em> for
         * <a href="#sendlocation">location data</a>, <em>record_video_note</em> or <em>upload_video_note</em>
         * for <a href="#sendvideonote">video notes</a>.
         */
        public string $action,
    ) {
    }
}
