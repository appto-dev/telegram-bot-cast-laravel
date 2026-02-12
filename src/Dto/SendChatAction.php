<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method when you need to tell the user that something is happening on
 * the bot's side. The status is set for 5 seconds or less (when a message arrives
 * from your bot, Telegram clients clear its typing status). Returns <em>True</em>
 * on success.
 * Example: The <a href="https://t.me/imagebot">ImageBot</a> needs some time to
 * process a request and upload the image. Instead of sending a text message along
 * the lines of "Retrieving image, please wait…", the bot may use <a
 * href="https://core.telegram.org/bots/api#sendchataction">sendChatAction</a> with
 * <em>action</em> = <em>upload_photo</em>. The user will see a "sending photo"
 * status for the bot.
 * We only recommend using this method when a response from the bot will take a
 * noticeable amount of time to arrive.
 */
final class SendChatAction extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the action will
         * be sent
         */
        public ?string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format <code>@supergroupusername</code>). Channel chats and channel direct
         * messages chats aren't supported.
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread or topic of a forum; for
         * supergroups and private chats of bots with forum topic mode enabled only
         */
        public ?int $message_thread_id,
        /**
         * Type of action to broadcast. Choose one, depending on what the user is about to
         * receive: <em>typing</em> for <a
         * href="https://core.telegram.org/bots/api#sendmessage">text messages</a>,
         * <em>upload_photo</em> for <a
         * href="https://core.telegram.org/bots/api#sendphoto">photos</a>,
         * <em>record_video</em> or <em>upload_video</em> for <a
         * href="https://core.telegram.org/bots/api#sendvideo">videos</a>,
         * <em>record_voice</em> or <em>upload_voice</em> for <a
         * href="https://core.telegram.org/bots/api#sendvoice">voice notes</a>,
         * <em>upload_document</em> for <a
         * href="https://core.telegram.org/bots/api#senddocument">general files</a>,
         * <em>choose_sticker</em> for <a
         * href="https://core.telegram.org/bots/api#sendsticker">stickers</a>,
         * <em>find_location</em> for <a
         * href="https://core.telegram.org/bots/api#sendlocation">location data</a>,
         * <em>record_video_note</em> or <em>upload_video_note</em> for <a
         * href="https://core.telegram.org/bots/api#sendvideonote">video notes</a>.
         */
        public string $action,
    ) {
    }
}
