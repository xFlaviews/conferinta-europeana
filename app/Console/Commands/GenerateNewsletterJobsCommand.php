<?php

namespace App\Console\Commands;

use App\Domains\Newsletter\Jobs\SendNewsletterJob;
use App\Models\Newsletter\NewsletterSent;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GenerateNewsletterJobsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-newsletter-jobs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Put missing jobs in queue';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $jobCount = DB::table('jobs')->where('queue', 'newsletter')->count();
        $failedJobs = DB::table('failed_jobs')->where('queue', 'newsletter')->count();
        $totalJobs = $jobCount + $failedJobs;
        $newslettersToBeSend = NewsletterSent::where('was_sent', false)->count();

        if($totalJobs < $newslettersToBeSend) {
            $missingJobs = abs($totalJobs - $newslettersToBeSend);
            for ($i=0; $i < $missingJobs; $i++) { 
                SendNewsletterJob::dispatch()->onQueue('newsletter');
            }
        }

    }
}
