<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

/**
 * @since 1.21
 */
class WikitextContentHandler extends TextContentHandler {

	public function __construct( $modelId = CONTENT_MODEL_WIKITEXT ) {
		parent::__construct( $modelId, array( CONTENT_FORMAT_WIKITEXT ) );
	}

	public function unserializeContent( $text, $format = null ) {
		$this->checkFormat( $format );

		return new WikitextContent( $text );
	}

	/**
	 * @see ContentHandler::makeEmptyContent
	 *
	 * @return Content
	 */
	public function makeEmptyContent() {
		return new WikitextContent( '' );
	}


	/**
	 * Returns a WikitextContent object representing a redirect to the given destination page.
	 *
	 * @see ContentHandler::makeRedirectContent
	 *
	 * @param Title $destination the page to redirect to.
	 *
	 * @return Content
	 */
	public function makeRedirectContent( Title $destination ) {
		$mwRedir = MagicWord::get( 'redirect' );
		$redirectText = $mwRedir->getSynonym( 0 ) . ' [[' . $destination->getPrefixedText() . ']]';

		return new WikitextContent( $redirectText );
	}

	/**
	 * Returns true because wikitext supports sections.
	 *
	 * @return boolean whether sections are supported.
	 */
	public function supportsSections() {
		return true;
	}

	/**
	 * Returns true, because wikitext supports caching using the
	 * ParserCache mechanism.
	 *
	 * @since 1.21
	 * @return bool
	 */
	public function isParserCacheSupported() {
		return true;
	}
}