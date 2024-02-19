<?php

namespace App\Helpers;

class ResponseMessages
{
    const AUTH_SUCCESS = 'Authentication successful';
    const UNPROCESSABLE_CONTENT = 'Unprocessable content';
    const PHONE_NUMBER_INVALID = "Hi, the App is only available to registered users. " .
    "Visit dufuna.com to apply for a program or send an email to info@dufuna.com to make a complaint";
    const EXPIRED_OTP = "OTP entered is expired. Please enter valid OTP";
    const INVALID_OTP = "OTP entered is invalid. Please enter valid OTP";
    const WRONG_PIN = 'Your pin is incorrect';
    const NOT_VERIFIED = "Hi there, an error occurred and you have not been verified";
    const TEST_DOES_NOT_EXIST = 'Test does not exist';
    const TEST_NOT_SAVED = 'Could not save test';
    const PROGRAM_DOES_NOT_EXIST = 'Program does not exist';
    const LESSON_DOES_NOT_EXIST = 'Lesson does not exist';
    const ACCESS_LEVEL_MESSAGE = 'Your access to the course has expired. Click here to unlock access';

    // Test Sessions
    const TEST_SESSION_NOT_CREATED = 'Could not start test session';
    const TEST_SESSION_NOT_UPDATED = 'Could not update test session';
    const TEST_SESSION_DOES_NOT_EXIST = 'Test session does not exist';
    const TEST_WRONG_NUMBER_OF_ANSWERS_SENT = 'Wrong number of answers sent for this test';
    const MAXIMUM_LIMIT_TO_TAKE_TEST = 'Applicant has reached maximum limit to take test';
    const APPLICANT_CANNOT_TAKE_TEST = 'Applicant not liable to take this test';
    const ACCOUNT_NOT_FOUND = 'Applicant account not found';
    const PUSH_NOTIFICATION_SUBSCRIPTION_FAILED = 'Could not subscribe device for push notifications. Reason: ';
    const INVALID_GITHUB_REQUEST = 'The Github request does not contain the secret key on the repository the webhook is attached to';
    const INVALID_GITHUB_EVENT = 'The  Github event is not what the service expects';
    const TASK_WITH_NAME_DOES_NOT_EXIST = 'No task with the specified details exists';
    const APPLICANT_GITHUB_ID_MISMATCH = 'No applicant with the specified githubID exists in our records';
    const APPLICANT_WITH_GITHUB_ID_EXISTS = 'This Github ID is already in use by another applicant';
    const APPLICANT_TASK_NOT_CREATED = 'Cannot create the Applicant Task';
    const APPLICANT_TASK_NOT_UPDATED = 'Cannot update this Applicant\'s task';
    const APPLICANT_HAS_NOT_SUBSCRIBED = 'This applicant has not been subscribed to FCM Push Notifications';
    const APPLICANT_NOTIFICATION_TITLE = 'You have a new notification';
    const APPLICANT_NOTIFICATION_BODY_STUB = 'Kindly check your Github Account. Your Pull request has ';
    const APPLICANT_NOTIFICATION_NEW_LABEL = 'a new label';
    const APPLICANT_NOTIFICATION_PR_CLOSED = 'been closed without being merged';
    const APPLICANT_NOTIFICATION_PR_MERGED = 'been merged';
    const APPLICANT_NOT_REGISTERED_FOR_PROGRAM = 'You are yet to be registered for this programme.';
    const ACCESS_LEVEL_DETAILS_NOT_SAVED = 'Access level details not saved';
    const VIDEO_LOG_NOT_SAVED = 'Cannot save video log';
    const ACTIVITY_NOT_SAVED = 'Cannot save activity';
    const APPLICANT_TOPIC_NOT_SAVED = 'Cannot save applicant topic';
    const APPLICANT_REGISTRATION_NOT_UPDATED = 'Could not update applicant registration';
    const PROGRAM_DOES_NOT_MATCH_PRODUCT_ID = 'Program does not match product id';
    const PROGRAM_IS_REQUIRED = 'Program is required';
    const TASK_ID_IS_REQUIRED = 'Task ID is required';
    const INVALID_URL = 'This URL is invalid';
    const URL_EXIST = 'This URL already exist';
    const PAGE_NOT_FOUND = "Page not found. You've entered an invalid URL";
    const REFERRAL_KEY_DOES_NOT_EXIST = 'Referral key does not exist';
    const EMAIL_DOES_NOT_MATCH_PHONE_NUMBER =
        "This email address does not match the phone number that is already existing";
    const PHONE_NUMBER_DOES_NOT_MATCH_EMAIL =
        "This phone number does not match the email that is already existing";

    public static function getSuccessMessage($entity, $action = 'created'): string
    {
        return sprintf('%s %s successfully', $entity, $action);
    }

    /**
     * @param $entity
     * @return string
     * @author Sholesi Kofoworola <kofoworola.sholesi@cottacush.com>
     */
    public static function getNotExistWarning($entity): string
    {
        return sprintf('%s does not exist', $entity);
    }

    /**
     * @param $entity
     * @return string
     * @author Malomo Damilare <damilaremalomo@gmail.com>
     */
    public static function getInvalidParamMessage($entity): string
    {
        return sprintf('The %s is invalid or not set', $entity);
    }

    /**
     * @param $email
     * @return string
     * @author Sholesi Kofoworola <kofoworola.sholesi@cottacush.com>
     */
    public static function getEmailNotSentMessage($email): string
    {
        return sprintf('Email not sent to %s', $email);
    }

    /**
     * @param $entity
     * @return string
     * @author Kofoworola Sholesi <kofoworola.sholesi@cottacush.com>
     */
    public static function getExistWarning($entity): string
    {
        return sprintf('%s exist already', $entity);
    }
}
