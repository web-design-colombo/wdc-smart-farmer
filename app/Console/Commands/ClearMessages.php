<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Message;
use Carbon\Carbon;

class ClearMessages extends Command
{
    protected $signature = 'messages:clear';
    protected $description = 'Clear all messages older than 2 hours';

    public function handle()
    {
        $twoHoursAgo = Carbon::now()->subHours(2);
        Message::where('created_at', '<', $twoHoursAgo)->delete();

        $this->info('All messages older than 2 hours have been deleted.');
    }
}
