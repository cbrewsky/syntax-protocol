<?php

defined ( '_JEXEC' ) or die;

//the class name must match the "element" property in the extensions table of the database, or the field "name" in the xml file EXACTLY or the script will not run
class joomstarterInstallerScript
{
    /**
     * @param mixed $parent
     */
    public function install($parent): void 
    {
        echo '<p> This is the install message called from the script.php file </p>';
    }
    /**
     * @param mixed $parent
     */
    public function uninstall($parent): void 
    {
        echo '<p>This is the uninstall message called from script.php</p>';
    }
    /**
     * @param mixed $parent
     */
    public function update($parent): void 
    {
        echo '<p>This is the update message called from script.php</p>';

    }


}
