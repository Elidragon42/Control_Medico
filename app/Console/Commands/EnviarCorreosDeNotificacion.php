<?php

namespace App\Console\Commands;

use App\Http\Controllers\NotificationEmailController;
use Illuminate\Console\Command;

class EnviarCorreosDeNotificacion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:enviar-correos-de-notificacion';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviar los correos de notificacion a empleados';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        app(NotificationEmailController::class)->enviarCorreosPendientes();
        $this->info('Correos pendientes enviados correctamente.');
    }
}
