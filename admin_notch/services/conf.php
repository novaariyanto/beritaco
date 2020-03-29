<?php

class CONF {

    /* Flag for demo version */
    public $DEMO_VERSION = false;

    /* Data configuration for database */
    public $DB_SERVER   = "localhost";
    public $DB_USER     = "root";
    public $DB_PASSWORD = "";
    public $DB_NAME     = "db_notch";

    /* FCM key for notification */
    public $FCM_KEY     = "AIzaSyCa3OeL7dlxJ29thUmRpp7tbMOCNY7VI1M";

    public $FCM_TOPIC   = "/topics/ALL-DEVICE";


    /* [ IMPORTANT ] be careful when edit this security code, use AlphaNumeric only*/
    /* This string must be same with security code at Android, if its different android unable to submit data */
    public $SECURITY_CODE = "abc";

    /* Mailer config ---------------------------------------------------- */

    // change with yours
    public $SMTP_EMAIL      = "sample@your-domain.com";
    public $SMTP_PASSWORD   = "password";
    public $SMTP_HOST       = "mail.your-domain.com";
    public $SMTP_PORT       = 562;

    // for email subject
    public $APP_NAME        = "Notch App";
    public $SUBJECT_EMAIL_FORGOT_PASS = "Notch App Forgot Password";

}

?>