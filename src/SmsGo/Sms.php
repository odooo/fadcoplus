<?php

namespace SmsGo;

class Sms
{
    /**
     * @var string sender number or name
     */
    private $sender;

    /**
     * @var array recipients numbers
     */
    private $recipients = array();

    /**
     * @var string sms content
     */
    private $message;

    public static function create($sender = null, $recipients = array(), $message = null)
    {
        return new self($sender, $recipients, $message);
    }

    public function __construct($sender = null, $recipients = array(), $message = null)
    {
        $this->sender = $sender;
        $this->message = $message;

        if (is_array($recipients)) {
            $this->recipients = $recipients;
        } else {
            $this->recipients = array();
            $this->recipients[] = $recipients;
        }            
    }

    public function to($recipient)
    {
        return $this->addRecipient($recipient);
    }

    public function sender($sender)
    {
        return $this->setSender($sender);
    }

    public function message($message)
    {
        return $this->setMessage($message);
    }

    /**
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param string
     *
     * @return SmsGo\Sms
     */
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * @var array
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @param array
     *
     * @return SmsGo\Sms
     */
    public function setRecipients(array $recipients)
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * @param string
     *
     * @return SmsGo\Sms
     */
    public function addRecipient($recipient)
    {
        $this->recipients[] = $recipient;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string
     *
     * @return SmsGo\Sms
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    public function __toString()
    {
        $str = "From: " . $this->sender . "\n";

        foreach ($this->recipients as $recipient) {
            $str .= "To: " . $recipient . "\n";
        }

        $str .= "\n" . $this->message;

        return $str;
    }
}
