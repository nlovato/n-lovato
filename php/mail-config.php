<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//the SendGrid SMTP authorization
$smtpUser = 'apikey';
$smtpSecret = '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';

// your Google reCAPTCHA keys here
$siteKey = '6LeI-6MUAAAAAFnG4uYPcf2EezjHdvv-o2puL8HA';
$secret = '6LeI-6MUAAAAAKinxeANJQ-BNvUOrS5ZVRCNu-4w';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["mail@email.com", "Recipient Name"];
