<?php

use yii\db\Migration;

/**
 * Handles the creation for table `teachers_table`.
 */
class m161105_094909_create_teachers_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('teachers', [
            'id' => $this->primaryKey(),
            'name' => $this->string(25),
            'surname' => $this->string(25),
            'department_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('teachers_table');
    }
}
