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

class Danjulf_TinyDomesticator_Block_Adminhtml_Tinyconfig extends Mage_Adminhtml_Block_Template
{

    /**
     * Check if TinyMCE is Loaded on current page
     *
     * @return boolean
     */
    public function isEnabled()
    {
        return $this->getLayout()->getBlock('head')->getCanLoadTinyMce();
    }

    /**
     * Retreives TinyMCE settings
     *
     * @return array $settings
     */
    public function getConfigSettings()
    {
        $config = Mage::getSingleton('tinydomesticator/config');
        $settings = array();
        $website = Mage::app()->getWebsite();

        if ($config->isGuessCssEnabled()) {
            //Trying to guess Css from website settings:
            $package = $website->getConfig('design/package/name');
            $package = empty($package) ? 'base' : $package;

            $skin = $website->getConfig('design/theme/skin');
            $skin = empty($skin) ? 'default' : $skin;

            $themeUrl = array(
                'frontend',
                $package,
                $skin,
                'css',
                'styles.css'
            );
            $themeUrl = implode('/',$themeUrl);
            $cssPath = Mage::getBaseUrl('skin') . $themeUrl;
        } else {
            $cssPath = $config->getCustomCss();
        }

        $settings['content_css']                = "'".$cssPath."'";
        $settings['schema']                     = "'".$config->getSchema()."'";
        if ($config->getValidElements()) {
            $settings['valid_elements']         = "'".$config->getValidElements()."'";
        }
        $settings['extended_valid_elements']    = "'".$config->getExtendedValidElements()."'";
        if ($config->getValidChildren()) {
            $settings['valid_children']         = "'".$config->getValidChildren()."'";
        }
        $settings['force_p_newlines']           = $config->isForceParagraphNewlinesEnabled() ? 'true' : 'false';
        $settings['force_br_newlines']          = $config->isForceBreakNewlinesEnabled() ? 'true' : 'false';
        $settings['forced_root_block']          = "'".$config->getForcedRootBlock()."'";

        return $settings;
    }
}