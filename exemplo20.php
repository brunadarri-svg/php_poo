<?php

interface Inotificador{
    public function enviar($destinatario, $mensagem);
}

//Implementar: E-mail
class NotificadorEmail implements INotificador {
    public function enviar($destinatario, $mensagem)
    {
        echo "Email enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

//Implementar: SMS 
class NotificadorSMS implements Inotificador{
    public function enviar($destinatario, $mensagem)
    {
        echo "SMS enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

//Implementar:  Whatsapp 
class NotificadorWhatsapp implements Inotificador{
    public function enviar ($destinatario, $mensagem)
    {
        echo "Whatsapp enviado para {$destinatario}. mensagem: {$mensagem}.";
    }
}

//Classe que usa a interface
class SistemaDeNotificacoes{
    private $notificador;

    public function __construct(Inotificador $notificador)
    {
       $this->notificador = $notificador;
    }
      public function notificarUsuario($destinatario, $mensagem)
      {
        $this->notificador->enviar($destinatario, $mensagem);
      }
 }


 $sistemaEmail = new SistemaDeNotificacoes(new NotificadorEmail());
 $sistemaSMS = new SistemaDeNotificacoes(new NotificadorSMS());
 $sistemaWhatsapp = new SistemaDeNotificacoes(new NotificadorWhatsapp());

 $sistemaEmail->notificarUsuario("bruna@email.com", "Seu Pedido foi confirmado");
 $sistemaSMS->notificarUsuario("17992178668", "Seu Pedido foi confirmado");
 $sistemaWhatsapp->notificarUsuario("17992178668", "Seu Pedido foi confirmado");
