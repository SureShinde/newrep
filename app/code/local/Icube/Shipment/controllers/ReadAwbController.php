<?php 
class Icube_Shipment_ReadAwbController extends Mage_Core_Controller_Front_Action 
{
	public function updateAwbNumberAction()
	{
		$basedir = Mage::getStoreConfig("icube_invoice/awb_csv/dir_csv");
		$basedirarchive = Mage::getStoreConfig("icube_invoice/awb_csv/dir_archive");
		$dir = Mage::getBaseDir('var').DS.$basedir;
		$dirarchive = Mage::getBaseDir('var').DS.$basedirarchive;
		
		echo "Update AWB Number<br>";
		echo "<pre>";
		
		Mage::helper('icube_shipment')->updateAwbNumber($dir, $dirarchive);

	}
}