<?php

namespace Iskandarali\MykadValidation\Commands;

use Illuminate\Console\Command;

class MykadValidationCommand extends Command
{
    public $signature = 'laravel-mykad-validation';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
