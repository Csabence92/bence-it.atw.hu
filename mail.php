<?php 
    if(isset($_POST['send_mail'])){
        if((strlen($_POST['from'])  > 0 && strpos($_POST['from'],"@")) && strlen($_POST['message']) > 0 && strlen($_POST['name']) > 0){
            echo(strlen($_POST['from']));
            $from =$_POST['from'];
            $message = $_POST['message'];
            $name = $_POST['name'];
            $subject = $name."- Érdklődés a CV Íránt";
            $message = $message ."\r\n_____\r\nNeve:".$name."\r\nE-mail címe: ".$from;
            //Email küldése
            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=UTF-8';
            $headers[] = 'To:bence.csatlos.92@gmail.com';
            $headers[]= 'From:bence-it@atw.hu';
            mail('bence.csatlos.92@gmail.com',$subject,$message);
            echo '<script language="javascript">alert("E-mail is sent")</script>';
            echo "<script type='text/javascript'>window.top.location='http://bence-it.atw.hu/';</script>"; exit;
            exit;

        }else{
            echo '<script>alert("Empty Fields!")</script>';
           // header("Location: write_me.html");
        }
    }else{
        echo '<script>alert("Empty Fields!")</script>';
        //header("Location: write_me.html");
    }
?>