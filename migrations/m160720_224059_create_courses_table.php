<?php

use yii\db\Migration;

/**
 * Handles the creation for table `courses`.
 */
class m160720_224059_create_courses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('courses', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'hours' => $this->integer()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('courses');
    }
}
