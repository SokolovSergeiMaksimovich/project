<?php

namespace App\Console\Commands;

use App\Models\UserStruct;
use Illuminate\Console\Command;

class FillNestedSetFields extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nestedset:fill';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Заполнение полей _lft и _rgt';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Генерация значений...');

        $this->fillFields();

        $this->info('Готово.');
    }

    private function fillFields()
    {
        UserStruct::fixTree();
    }
}
