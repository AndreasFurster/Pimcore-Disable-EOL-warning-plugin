<?php


class DisableEolWarningPimcore2_Plugin  extends Pimcore_API_Plugin_Abstract implements Pimcore_API_Plugin_Interface {

    public function init() {
        // register your events here

       

        // for more information regarding events, please visit:
        // http://www.pimcore.org/wiki/display/PIMCORE/Event+API+%28EventManager%29+since+2.1.1
        // http://framework.zend.com/manual/1.12/de/zend.event-manager.event-manager.html
        // http://www.pimcore.org/wiki/pages/viewpage.action?pageId=12124202

    }

    public function handleDocument ($event) {
        // do something

    }

	public static function install (){
        // implement your own logic here
        return true;
	}
	
	public static function uninstall (){
        // implement your own logic here
        return true;
	}

	public static function isInstalled () {
        // implement your own logic here
        return true;
	}


}
