<?php
namespace App\Models;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

class SendEmail {
    
    /**
     * Send email
     * 
     * @var array $data
     */
    public static function email($data) {
        if(is_array($data) && !empty($data)) {
            Mail::to(env('MAIL_USERNAME'))->send(new ContactUs($data));
            return self::responseMsg(true);
        }else {
            return self::responseMsg(false);
        }
    }

    /**
     * Message after sending the email
     * 
     * @return string
     */
    public static function responseMsg($mail) {
        return $mail ? "Thank you for contacting us !" : 'Something went wrong ! Try once more!';
    }
}