<?php
/**
 * Danjulf_TinyDomesticator
 *
 * Copyright (C) 2014 Daniel Bergstrom (danjulf@gmail.com)
 *
 * This file is part of Danjulf_TinyDomesticator.
 *
 * Danjulf_TinyDomesticator is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Danjulf_TinyDomesticator is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with Danjulf_TinyDomesticator. If not, see <http://www.gnu.org/licenses/>.
 *
 * @category  Danjulf
 * @package   Danjulf_TinyDomesticator
 * @author    Daniel Bergstrom <danjulf@gmail.com>
 * @copyright 2014 Daniel Bergstrom (danjulf@gmail.com)
 * @license   http://www.gnu.org/licenses/lgpl.html GNU LGPL
 */

class Danjulf_TinyDomesticator_Model_Config
{

    const TINYDOMESTICATOR_GUESS_CSS    = 'cms/wysiwyg_stylesheets/guess_css';
    const TINYDOMESTICATOR_CUSTOM_CSS   = 'cms/wysiwyg_stylesheets/custom_css';

    const TINYDOMESTICATOR_SCHEMA                   = 'cms/wysiwyg_cleanup_output/schema';
    const TINYDOMESTICATOR_VALID_ELEMENTS           = 'cms/wysiwyg_cleanup_output/valid_elements';
    const TINYDOMESTICATOR_EXTENDED_VALID_ELEMENTS  = 'cms/wysiwyg_cleanup_output/extended_valid_elements';
    const TINYDOMESTICATOR_VALID_CHILDREN           = 'cms/wysiwyg_cleanup_output/valid_children';
    const TINYDOMESTICATOR_FORCE_P_NEWLINES         = 'cms/wysiwyg_cleanup_output/force_p_newlines';
    const TINYDOMESTICATOR_FORCE_BR_NEWLINES        = 'cms/wysiwyg_cleanup_output/force_br_newlines';
    const TINYDOMESTICATOR_FORCED_ROOT_BLOCK        = 'cms/wysiwyg_cleanup_output/forced_root_block';

    /**
     * Check if tinyMCE should guess the cssPath
     *
     * @return boolean
     */
    public function isGuessCssEnabled()
    {
        return Mage::getStoreConfig(self::TINYDOMESTICATOR_GUESS_CSS);
    }

    /**
     * Retrieve custom css-path
     *
     * @return string
     */
    public function getCustomCss()
    {
        return Mage::getStoreConfig(self::TINYDOMESTICATOR_CUSTOM_CSS);
    }

    /**
     * Retrieve schema
     *
     * @return string
     */
    public function getSchema()
    {
        return Mage::getStoreConfig(self::TINYDOMESTICATOR_SCHEMA);
    }

    /**
     * Retrieve Valid Elements
     *
     * @return string
     */
    public function getValidElements()
    {
        return Mage::getStoreConfig(self::TINYDOMESTICATOR_VALID_ELEMENTS);
    }

    /**
     * Retrieve Extended Valid Elements
     *
     * @return string
     */
    public function getExtendedValidElements()
    {
        return Mage::getStoreConfig(self::TINYDOMESTICATOR_EXTENDED_VALID_ELEMENTS);
    }

    /**
     * Retrieve Valid Children
     *
     * @return string
     */
    public function getValidChildren()
    {
        return Mage::getStoreConfig(self::TINYDOMESTICATOR_VALID_CHILDREN);
    }

    /**
     * Check if TinyMCE should force Paragraphs on newlines
     *
     * @return boolean
     */
    public function isForceParagraphNewlinesEnabled()
    {
        return Mage::getStoreConfig(self::TINYDOMESTICATOR_FORCE_P_NEWLINES);
    }

    /**
     * Check if TinyMCE should force Break on newlines
     *
     * @return boolean
     */
    public function isForceBreakNewlinesEnabled()
    {
        return Mage::getStoreConfig(self::TINYDOMESTICATOR_FORCE_BR_NEWLINES);
    }

    /**
     * Check if TinyMCE should force root blocks
     *
     * @return boolean
     */
    public function getForcedRootBlock()
    {
        return Mage::getStoreConfig(self::TINYDOMESTICATOR_FORCED_ROOT_BLOCK);
    }

}
