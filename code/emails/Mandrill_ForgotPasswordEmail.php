<?php

/**
 * Replace the default Member_ForgotPasswordEmail
 *
 * @author LeKoala <thomas@lekoala.be>
 */
class Mandrill_ForgotPasswordEmail extends MandrillEmail
{
    protected $from    = '';  // setting a blank from address uses the site's default administrator email
    protected $subject = '';

    public function __construct()
    {
        parent::__construct();

        $this->subject = _t('Member.SUBJECTPASSWORDRESET',
            "Your password reset link", 'Email subject');

        $viewer     = new SSViewer('ForgotPasswordEmail');
        $this->body = $viewer;
    }
}