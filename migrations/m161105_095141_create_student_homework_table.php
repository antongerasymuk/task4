<?php

use yii\db\Migration;

/**
 * Handles the creation for table `student_homework_table`.
 */
class m161105_095141_create_student_homework_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('student_homework', [
            'student_id' => $this->integer(),
            'homework_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('student_homework_table');
    }
}
