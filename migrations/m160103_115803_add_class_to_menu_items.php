<?php

/**
 * @copyright Copyright &copy; Gogodigital Srls
 * @company Gogodigital Srls - Wide ICT Solutions
 * @website http://www.gogodigital.it
 * @github https://github.com/cinghie/yii2-menu
 * @license GNU GENERAL PUBLIC LICENSE VERSION 3
 * @package yii2-menu
 * @version 0.9.3
 */

use cinghie\traits\migrations\Migration;

class m160103_115803_add_class_to_menu_items extends Migration
{

    public function up()
    {
	    $this->addColumn('{{%menu_items}}', 'class', $this->string(24)->defaultValue('')->after('link'));
    }

    public function down()
    {
	    $this->dropColumn('{{%menu_items}}','class');
    }

}
