<?php // phpcs:ignore

namespace WebSEO\Constants;

use WebSEO\Helpers\TagCompose;
use WebSEO\Tags\PostTitle;
use WebSEO\Tags\SiteTagline;
use WebSEO\Tags\CategoryTitle;
use WebSEO\Tags\CurrentPagination;
use WebSEO\Tags\SiteTitle;
use WebSEO\Tags\TagTitle;
use WebSEO\Tags\TermTitle;
use WebSEO\Tags\CategoryDescription;
use WebSEO\Tags\TagDescription;
use WebSEO\Tags\TermDescription;
use WebSEO\Tags\PostAuthor;
use WebSEO\Tags\Date\ArchiveDate;
use WebSEO\Tags\CustomPostTypePlural;

/**
 * MetasDefaultValues
 */
abstract class MetasDefaultValues {
	/**
	 * The getPostTypeTitleValue function.
	 *
	 * @since 4.5.0
	 *
	 * @return string
	 */
	public static function getPostTypeTitleValue() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return sprintf(
			'%s %s %s',
			TagCompose::getValueWithTag( PostTitle::NAME ),
			'%%sep%%',
			TagCompose::getValueWithTag( SiteTitle::NAME )
		);
	}

	public static function getPostTypeDescriptionValue() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return TagCompose::getValueWithTag( 'post_excerpt' );
	}

	public static function getTaxonomyCategoryValue() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return sprintf(
			'%s %s %s %s',
			TagCompose::getValueWithTag( CategoryTitle::NAME ),
			TagCompose::getValueWithTag( CurrentPagination::NAME ),
			'%%sep%%',
			TagCompose::getValueWithTag( SiteTitle::NAME )
		);
	}

	public static function getTagTitleValue() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return sprintf(
			'%s %s %s %s',
			TagCompose::getValueWithTag( TagTitle::NAME ),
			TagCompose::getValueWithTag( CurrentPagination::NAME ),
			'%%sep%%',
			TagCompose::getValueWithTag( SiteTitle::NAME )
		);
	}

	public static function getTermTitleValue() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return sprintf(
			'%s %s %s %s',
			TagCompose::getValueWithTag( TermTitle::NAME ),
			TagCompose::getValueWithTag( CurrentPagination::NAME ),
			'%%sep%%',
			TagCompose::getValueWithTag( SiteTitle::NAME )
		);
	}

	public static function getTaxonomyCategoryDescriptionValue() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return TagCompose::getValueWithTag( CategoryDescription::NAME );
	}

	public static function getTagDescriptionValue() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return TagCompose::getValueWithTag( TagDescription::NAME );
	}

	public static function getTermDescriptionValue() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return TagCompose::getValueWithTag( TermDescription::NAME );
	}

	public static function getAuthorTitleValue() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return sprintf(
			'%s %s %s',
			TagCompose::getValueWithTag( PostAuthor::NAME ),
			'%%sep%%',
			TagCompose::getValueWithTag( SiteTitle::NAME )
		);
	}

	public static function getArchiveDateTitleValue() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return sprintf(
			'%s %s %s',
			TagCompose::getValueWithTag( ArchiveDate::NAME ),
			'%%sep%%',
			TagCompose::getValueWithTag( SiteTitle::NAME )
		);
	}

	public static function getArchiveTitlePostType() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return sprintf(
			'%s %s %s',
			TagCompose::getValueWithTag( CustomPostTypePlural::NAME ),
			TagCompose::getValueWithTag( CurrentPagination::NAME ),
			'%%sep%%',
			TagCompose::getValueWithTag( SiteTitle::NAME )
		);
	}
}
