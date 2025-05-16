<?php

declare(strict_types=1);

return [
    // The URI of the endpoint that will handle the task
    'uri' => env('GOOGLE_CLOUD_TASKS_HANDLER') . env('CLOUD_TASKS_URI', '/cloud-tasks/handler'),

    // If the application only dispatches jobs
    'disable_task_handler' => env('CLOUD_TASKS_DISABLE_TASK_HANDLER', false),
];
