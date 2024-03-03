<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Response;
use PHPMailer\PHPMailer\SMTP;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Handle form submission logic here
        $email = $request->input('cf-email');
        $name = $request->input('cf-name');
        $subject = $request->input('cf-subject') == null ? ' ' : $request->input('cf-subject');
        $message = $request->input('cf-message');
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = false;
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = env('MAIL_PORT');

            $mail->setFrom(env('MAIL_FROM_ADDRESS'));
            $mail->addAddress( env('MAIL_TO_ADDRESS'));
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Incoming Message: Contact Us Form';
            // Constructing the HTML email body
            $htmlBody = '<html><head><title>Contact Form Submission</title>';
            $htmlBody .= '<style>body {font-family: Arial, sans-serif;background-color: #f5f5f5;color: #333;padding: 20px;}';
            $htmlBody .= '.container {max-width: 600px;margin: 0 auto;background-color: #fff;border-radius: 5px;padding: 20px;box-shadow: 0 2px 5px rgba(0,0,0,0.1);}';
            $htmlBody .= 'h2 {color: #333;}p {margin-bottom: 20px;}.highlight {background-color: #f0f0f0;padding: 10px;border-radius: 5px;}</style>';
            $htmlBody .= '</head><body><div class="container">';
            $htmlBody .= '<h2>Contact Form Submission</h2>';
            $htmlBody .= '<p>Dear Admin,</p>';
            $htmlBody .= '<p>You have received a new message from the contact form:</p>';
            $htmlBody .= '<div class="highlight">';
            $htmlBody .= '<p><strong>Email:</strong> ' . $email . '</p>';
            $htmlBody .= '<p><strong>Name:</strong> ' . $name . '</p>';
            $htmlBody .= '<p><strong>Subject:</strong> ' . $subject . '</p>';
            $htmlBody .= '<p><strong>Message:</strong> ' . $message . '</p>'; // Assuming $message variable contains the message content
            $htmlBody .= '</div></div></body></html>';
        
            $mail->Body    = $htmlBody;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            if(! $mail->send()) {
                return Response::json("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
            } 
            // $request->session()->flash('status', 'Message has been sent');
          //  return Response::json('Message has been sent');
        } catch (Exception $e) {
            dd($mail->ErrorInfo);
            return Response::json("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
