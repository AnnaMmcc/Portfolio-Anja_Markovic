<?php

namespace App\Services;

use SendinBlue\Client\Api\TransactionalEmailsApi;
use SendinBlue\Client\Configuration;
use GuzzleHttp\Client;
use Exception;

class BrevoMailService
{
    protected $apiInstance;

    public function __construct()
    {
        $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', env('BREVO_API_KEY'));
        $this->apiInstance = new TransactionalEmailsApi(new Client(), $config);
    }

    public function sendEmail($toEmail, $toName, $subject, $htmlContent)
    {
        try {
            $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([
                'sender' => [
                    'name' => env('MAIL_FROM_NAME'),
                    'email' => env('MAIL_FROM_ADDRESS')
                ],
                'to' => [
                    ['email' => $toEmail, 'name' => $toName]
                ],
                'subject' => $subject,
                'htmlContent' => $htmlContent,
            ]);

            return $this->apiInstance->sendTransacEmail($sendSmtpEmail);
        } catch (Exception $e) {
            throw new Exception('Error sending email: ' . $e->getMessage());
        }
    }
}
