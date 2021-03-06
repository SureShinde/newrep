<?php

/**
 * @author     Kristof Ringleff
 * @package    Fooman_PdfCustomiser
 * @copyright  Copyright (c) 2009 Fooman Limited (http://www.fooman.co.nz)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Fooman_PdfCustomiser_Model_System_AddressFormatOptions
{
    /**
     * supply dropdown options for address format
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value'=>'pdf', 'label'=>Mage::helper('pdfcustomiser')->__('Default')),
            array('value'=>'us', 'label'=>Mage::helper('pdfcustomiser')->__('US')),
            array('value'=>'european', 'label'=>Mage::helper('pdfcustomiser')->__('European')),
            array('value'=>'jp', 'label'=>Mage::helper('pdfcustomiser')->__('Japan'))
        );
    }


}