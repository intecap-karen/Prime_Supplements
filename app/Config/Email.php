<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public $fromEmail;
    public $fromName;
    public $protocol;
    public $SMTPHost;
    public $SMTPUser;
    public $SMTPPass;
    public $SMTPPort;
    public $SMTPTimeout;
    public $SMTPCrypto;
    public $mailType;

    public string $recipients = '';
    public string $userAgent = 'CodeIgniter';
    public string $mailPath = '/usr/sbin/sendmail';
    public bool $SMTPKeepAlive = false;
    public bool $wordWrap = true;
    public int $wrapChars = 76;
    public string $charset = 'UTF-8';
    public bool $validate = false;
    public int $priority = 3;
    public string $CRLF = "\r\n";
    public string $newline = "\r\n";
    public bool $BCCBatchMode = false;
    public int $BCCBatchSize = 200;
    public bool $DSN = false;

    public function __construct()
    {
        parent::__construct();

        $this->fromEmail    = getenv('email.fromEmail');
        $this->fromName     = getenv('email.fromName');
        $this->protocol     = getenv('email.protocol');
        $this->SMTPHost     = getenv('email.SMTPHost');
        $this->SMTPUser     = getenv('email.SMTPUser');
        $this->SMTPPass     = getenv('email.SMTPPass');
        $this->SMTPPort = (int) getenv('email.SMTPPort');
       $this->SMTPTimeout = (int) getenv('email.SMTPTimeout');
        $this->SMTPCrypto   = getenv('email.SMTPCrypto');
        $this->mailType     = getenv('email.mailType');
    }
}