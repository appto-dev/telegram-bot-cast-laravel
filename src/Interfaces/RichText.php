<?php

namespace Appto\TelegramBot\Interfaces;

/**
 * This object represents a rich formatted text. Currently, it can be either a String for plain text, an Array of
 * <a href="https://core.telegram.org/bots/api#richtext">RichText</a>, or any of the following types:
 *  - <a href="https://core.telegram.org/bots/api#richtextbold">RichTextBold</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextitalic">RichTextItalic</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextunderline">RichTextUnderline</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextstrikethrough">RichTextStrikethrough</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextspoiler">RichTextSpoiler</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextdatetime">RichTextDateTime</a>
 *  - <a href="https://core.telegram.org/bots/api#richtexttextmention">RichTextTextMention</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextsubscript">RichTextSubscript</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextsuperscript">RichTextSuperscript</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextmarked">RichTextMarked</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextcode">RichTextCode</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextcustomemoji">RichTextCustomEmoji</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#richtextmathematicalexpression">RichTextMathematicalExpression</a>
 *  - <a href="https://core.telegram.org/bots/api#richtexturl">RichTextUrl</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextemailaddress">RichTextEmailAddress</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextphonenumber">RichTextPhoneNumber</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextbankcardnumber">RichTextBankCardNumber</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextmention">RichTextMention</a>
 *  - <a href="https://core.telegram.org/bots/api#richtexthashtag">RichTextHashtag</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextcashtag">RichTextCashtag</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextbotcommand">RichTextBotCommand</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextanchor">RichTextAnchor</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextanchorlink">RichTextAnchorLink</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextreference">RichTextReference</a>
 *  - <a href="https://core.telegram.org/bots/api#richtextreferencelink">RichTextReferenceLink</a>
 */
interface RichText
{
}
