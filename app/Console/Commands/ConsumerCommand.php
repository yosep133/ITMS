<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpAmqpLib\Connection\AMQPStreamConnection;

class ConsumerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rabbitmq:consumer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'RabbitMQ Consumer';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $connection = new AMQPStreamConnection(
            'localhost',
            5672,'guest','guest'
        );
        $channel = $connection->channel();

        $channel->queue_declare(
            'task_queue', false, true, false, false
        );

        echo " [*] Waiting for message. To exit press CTRL+C\n";

        $callback = function ($msg){
            echo ' [x] Received ', $msg->body, "\n";
            $msg->delivery_info['channel'] -> basic_ack($msg->delivery_info['delivery_tag']);
        };

        $channel->basic_qos(null, 1, null);
        $channel->basic_consume(
            'task_queue','',false, false, false, false, $callback           
        );

        while($channel->is_consuming()){
            $channel->wait();
        }

        $channel->close();

        return Command::SUCCESS;
    }
}
