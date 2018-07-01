<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class EmailController extends Controller {

    public function envio(Request $request) {

        $requestTo = ($request->input('to.name')) ? [$request->to] : $request->to;
        $arrayTo = self::arrayToObject($requestTo);

        foreach ($arrayTo as $to) {
            $this->sendMail($request, $to);
        }
    }

    private static function arrayToObject($to) {
        return ($to) ? json_decode(json_encode($to)) : [];
    }

    private function sendMail($request, $to) {
        $from = self::arrayToObject($request->from);
        $attachment = self::arrayToObject($request->attachment);

        $fromEmail = ($from && $from->email) ? $from->email : env('MAIL_FROM_ADDRESS');
        $fromName = ($from && $from->name) ? $from->name : env('MAIL_FROM_NAME');

        $attachmentExtension = null;
        $attachmentData = ($attachment && $attachment->data) ? base64_decode($attachment->data) : null;

        if ($attachment) {
            $extension = explode('.', $attachment->name);
            $attachmentExtension = end($extension);
        }

        $email = new Email(['destinatario' => $to->email,
            'nome' => $fromName,
            'remetente' => $fromEmail,
            'titulo' => $request->subject,
            'texto' => $request->text,
            'arquivo' => $attachmentData,
            'extensao' => $attachmentExtension,
            'data' => \Carbon\Carbon::now('America/Sao_Paulo'),
            'prioridade' => $request->priority,
            'status' => '0']);

        $email->save();
    }

}
