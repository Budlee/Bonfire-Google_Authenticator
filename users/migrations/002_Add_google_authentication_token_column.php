<?php

if (!defined('BASEPATH'))
{
    exit('No direct script access allowed');
}

/**
 * Add columns to users table to allow google authentication to work
 */
class Migration_Add_google_authentication_token_column extends Migration
{

    /**
     * @var String The name of the table to modify
     */
    private $tableName = 'user_cookies';

    /**
     * @var Array Field definitions for the migration
     */
    private $fields = array(
        'ga_token' => array(
            'type' => 'VARCHAR',
            'constraint' => 128,
            'null' => TRUE,
        ),
    );


    /**
     * Migrate to this version
     *
     * @return void
     */
    public function up()
    {
        $this->dbforge->add_column($this->tableName, $this->fields);
    }

    /**
     * Migrate to the previous version
     *
     * @return void
     */
    public function down()
    {
        foreach ($this->fields as $columnName => $columnDef)
        {
            $this->dbforge->drop_column($this->tableName, $columnName);
        }
    }

}
