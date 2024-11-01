<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents one result of an inline query. Telegram clients currently
 * support results of the following 20 types:
 *  - <a href="#inlinequeryresultcachedaudio">InlineQueryResultCachedAudio</a>
 *  - <a
 * href="#inlinequeryresultcacheddocument">InlineQueryResultCachedDocument</a>
 *  - <a href="#inlinequeryresultcachedgif">InlineQueryResultCachedGif</a>
 *  - <a
 * href="#inlinequeryresultcachedmpeg4gif">InlineQueryResultCachedMpeg4Gif</a>
 *  - <a href="#inlinequeryresultcachedphoto">InlineQueryResultCachedPhoto</a>
 *  - <a href="#inlinequeryresultcachedsticker">InlineQueryResultCachedSticker</a>
 *  - <a href="#inlinequeryresultcachedvideo">InlineQueryResultCachedVideo</a>
 *  - <a href="#inlinequeryresultcachedvoice">InlineQueryResultCachedVoice</a>
 *  - <a href="#inlinequeryresultarticle">InlineQueryResultArticle</a>
 *  - <a href="#inlinequeryresultaudio">InlineQueryResultAudio</a>
 *  - <a href="#inlinequeryresultcontact">InlineQueryResultContact</a>
 *  - <a href="#inlinequeryresultgame">InlineQueryResultGame</a>
 *  - <a href="#inlinequeryresultdocument">InlineQueryResultDocument</a>
 *  - <a href="#inlinequeryresultgif">InlineQueryResultGif</a>
 *  - <a href="#inlinequeryresultlocation">InlineQueryResultLocation</a>
 *  - <a href="#inlinequeryresultmpeg4gif">InlineQueryResultMpeg4Gif</a>
 *  - <a href="#inlinequeryresultphoto">InlineQueryResultPhoto</a>
 *  - <a href="#inlinequeryresultvenue">InlineQueryResultVenue</a>
 *  - <a href="#inlinequeryresultvideo">InlineQueryResultVideo</a>
 *  - <a href="#inlinequeryresultvoice">InlineQueryResultVoice</a>
 * Note: All URLs passed in inline query results will be available to end users and
 * therefore must be assumed to be public.
 *
 * @version Telegram Bot API 7.11
 */
final class InlineQueryResult extends Data implements TelegramTypeInterface
{
}
