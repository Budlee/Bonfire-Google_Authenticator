<?php

if (!defined('BASEPATH'))
{
    exit('No direct script access allowed');
}

/**
 * Add columns to users table to allow google authentication to work
 */
class Migration_Add_google_authenticataion_columns extends Migration
{

    /**
     * @var String The name of the table to modify
     */
    private $tableName = 'users';

    /**
     * @var Array Field definitions for the migration
     */
    private $fields = array(
        'ga_enabled' => array(
            'type' => 'INT',
            'constraint' => 1,
            'null' => FALSE,
            'default' => 0,
        ),
        'ga_seed' => array(
            'type' => 'VARCHAR',
            'constraint' => 16,
            'null' => TRUE,
            'default' => 'NULL',
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
