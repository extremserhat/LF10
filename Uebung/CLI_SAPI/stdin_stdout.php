The command line interface data in STDIN is not made available until return is pressed.
By adding "readline_callback_handler_install('', function(){});" before reading STDIN for the first time single key presses can be captured.

Note: This only seems to work under Linux CLI and will not work in Apache or Windows CLI.

This cam be used to obscure a password or used with 'stream_select' to make a non blocking keyboard monitor.

<?php

// Demo WITHOUT readline_callback_handler_install('', function(){});
    $resSTDIN=fopen("php://stdin","r");
    echo("Type 'x'. Then press return.");
    $strChar = stream_get_contents($resSTDIN, 1);

    echo("\nYou typed: ".$strChar."\n\n");
    fclose($resSTDIN);
   
// Demo WITH readline_callback_handler_install('', function(){});
// This line removes the wait for <CR> on STDIN
    readline_callback_handler_install('', function(){});
   
    $resSTDIN=fopen("php://stdin","r");
    echo("We have now run: readline_callback_handler_install('', function(){});\n");
    echo("Press the 'y' key");
    $strChar = stream_get_contents($resSTDIN, 1);
    echo("\nYou pressed: ".$strChar."\nBut did not have to press <cr>\n");
    fclose($resSTDIN);
    readline_callback_handler_remove ();
    echo("\nGoodbye\n")
?>

It also hides text from the CLI so can be used for things like. password obscurification.
eg

<?php
    readline_callback_handler_install('', function(){});
    echo("Enter password followed by return. (Do not use a real one!)\n");
    echo("Password: ");
    $strObscured='';
    while(true)
    {
    $strChar = stream_get_contents(STDIN, 1);
    if($strChar===chr(10))
    {
        break;
    }
    $strObscured.=$strChar;
    echo("*");
    }
    echo("\n");
    echo("You entered: ".$strObscured."\n");
?>