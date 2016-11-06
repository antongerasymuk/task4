<?php

use yii\db\Migration;

/**
 * Handles the creation for table `homeworks_table`.
 */
class m161105_095157_create_homeworks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('homeworks', [
            'id' => $this->primaryKey(),
            'name' => $this->string(25),
            'subject_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('homeworks_table');
    }
}
