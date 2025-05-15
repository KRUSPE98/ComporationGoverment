<?php

namespace App\Listeners;

use Illuminate\Queue\Events\JobFailed;
use Illuminate\Support\Facades\Log;

class LogFailedJob
{
    /**
     * Handle the event.
     */
    public function handle(JobFailed $event): void
    {
        Log::error('❌ Job fallido: ' . $event->job->getName(), [
            'connectionName' => $event->connectionName,
            'jobPayload' => $event->job->payload(),
            'exception' => $event->exception->getMessage(),
            'trace' => $event->exception->getTraceAsString()
        ]);
    }
}
