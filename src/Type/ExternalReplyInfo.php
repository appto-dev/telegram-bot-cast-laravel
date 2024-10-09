<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object contains information about a message that is being replied to, which
 * may come from another chat or forum topic.
 *
 * @version Telegram Bot API 7.10
 */
final class ExternalReplyInfo extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Origin of the message replied to by the given message
         * @var MessageOrigin
         */
        public MessageOrigin $origin,
        /**
         * Chat the original message belongs to. Available only if the chat is a supergroup
         * or a channel.
         * @var Chat|null
         */
        public ?Chat $chat,
        /**
         * Unique message identifier inside the original chat. Available only if the
         * original chat is a supergroup or a channel.
         * @var int|null
         */
        public ?int $message_id,
        /**
         * Options used for link preview generation for the original message, if it is a
         * text message
         * @var LinkPreviewOptions|null
         */
        public ?LinkPreviewOptions $link_preview_options,
        /**
         * Message is an animation, information about the animation
         * @var Animation|null
         */
        public ?Animation $animation,
        /**
         * Message is an audio file, information about the file
         * @var Audio|null
         */
        public ?Audio $audio,
        /**
         * Message is a general file, information about the file
         * @var Document|null
         */
        public ?Document $document,
        /**
         * Message contains paid media; information about the paid media
         * @var PaidMediaInfo|null
         */
        public ?PaidMediaInfo $paid_media,
        /**
         * Message is a photo, available sizes of the photo
         * @var PhotoSize|null
         */
        public ?PhotoSize $photo,
        /**
         * Message is a sticker, information about the sticker
         * @var Sticker|null
         */
        public ?Sticker $sticker,
        /**
         * Message is a forwarded story
         * @var Story|null
         */
        public ?Story $story,
        /**
         * Message is a video, information about the video
         * @var Video|null
         */
        public ?Video $video,
        /**
         * Message is a video note, information about the video message
         * @var VideoNote|null
         */
        public ?VideoNote $video_note,
        /**
         * Message is a voice message, information about the file
         * @var Voice|null
         */
        public ?Voice $voice,
        /**
         * True, if the message media is covered by a spoiler animation
         * @var true|null
         */
        public ?true $has_media_spoiler,
        /**
         * Message is a shared contact, information about the contact
         * @var Contact|null
         */
        public ?Contact $contact,
        /**
         * Message is a dice with random value
         * @var Dice|null
         */
        public ?Dice $dice,
        /**
         * Message is a game, information about the game. More about games
         * @var Game|null
         */
        public ?Game $game,
        /**
         * Message is a scheduled giveaway, information about the giveaway
         * @var Giveaway|null
         */
        public ?Giveaway $giveaway,
        /**
         * A giveaway with public winners was completed
         * @var GiveawayWinners|null
         */
        public ?GiveawayWinners $giveaway_winners,
        /**
         * Message is an invoice for a payment, information about the invoice. More about
         * payments
         * @var Invoice|null
         */
        public ?Invoice $invoice,
        /**
         * Message is a shared location, information about the location
         * @var Location|null
         */
        public ?Location $location,
        /**
         * Message is a native poll, information about the poll
         * @var Poll|null
         */
        public ?Poll $poll,
        /**
         * Message is a venue, information about the venue
         * @var Venue|null
         */
        public ?Venue $venue,
    ) {
    }
}
