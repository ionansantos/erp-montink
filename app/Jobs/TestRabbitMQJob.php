<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log; // Importe a Facade Log

class TestRabbitMQJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Crie uma nova instância do Job.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute o Job.
     */
    public function handle(): void
    {
        // Esta é a sua lógica de teste
        Log::info('*** O Job de Teste foi executado com sucesso! ***');

        // Você também pode simplesmente imprimir no console para ver o resultado:
        echo "Job TestRabbitMQJob executado!\n";
    }
}