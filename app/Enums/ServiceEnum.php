<?php

namespace App\Enums;

enum ServiceEnum
{
    const MAILER = 'mailer';
    const BEANSTALKD_CLIENT = 'beanStalkdClient';
    const EMAIL_SERVICE = 'emailService';
    const SMS_SERVICE = 'smsService';
    const OBJECT_STORAGE = 's3';
    const FCM = 'fcm';
    const APPLE = 'apple';
}
