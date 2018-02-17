<?php
use Migrations\AbstractMigration;

class CreateBanners extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('banners');
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('title', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('subtitle', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('description', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('image', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('path_image', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('background', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('path_background', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('order', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('status', 'integer', [
            'default' => 1,
            'limit' => 11,
            'null' => false,
        ]);
        $table->create();
    }
}
