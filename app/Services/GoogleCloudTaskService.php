<?php

namespace App\Services;

use Google\Cloud\Tasks\V2beta3\CloudTasksClient;
use Google\Cloud\Tasks\V2beta3\Task;
use Google\Cloud\Tasks\V2beta3\HttpRequest;
use Google\Cloud\Tasks\V2beta3\HttpMethod;
use Google\Protobuf\Duration;
use Illuminate\Support\Facades\Log;

class GoogleCloudTaskService
{
    public function createHttpTask(array $payload, string $url)
    {
        try {
            $client = new CloudTasksClient();

            $project = env('GOOGLE_CLOUD_PROJECT_ID');
            $location = env('GOOGLE_CLOUD_LOCATION', 'us-central1');
            $queue = env('GOOGLE_CLOUD_QUEUE', 'default');

            $parent = $client->queueName($project, $location, $queue);

            $httpRequest = new HttpRequest([
                'http_method' => HttpMethod::POST,
                'url' => $url,
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'body' => json_encode($payload),
            ]);

            $task = new Task([
                'http_request' => $httpRequest,
            ]);

            return $client->createTask($parent, $task);
        } catch (\Throwable $th) {
            Log::error('Error creating task: ' . $th->getMessage(), $payload, $url);
            throw new \Exception('Error creating task: ' . $th->getMessage());
        } finally {
            if (isset($client)) {
                $client->close();
            }
        }
    }
}
