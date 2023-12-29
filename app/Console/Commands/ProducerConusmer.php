<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use PhpAmqpLib\Table\AMQPTable;


class ProducerConusmer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rabbitmq:producer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'RabbitMQ Producer';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $connection = new AMQPStreamConnection(
            'localhost',
            5672,
            'guest',
            'guest'
        );

        $channel = $connection->channel();

        $data = 'Hello WOrld';

        $msg = new AMQPMessage(
            $data,
            array('delivery_mode'=>AMQPmessage::DELIVERY_MODE_PERSISTENT)
        );
        $channel->basic_publish($msg,'','task_queue');

        echo '[x] sent', $data,'\n';

        $channel->close();
        $connection->close();

        return Command::SUCCESS;
    }
}
