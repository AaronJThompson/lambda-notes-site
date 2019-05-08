<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

if ( $_POST['payload'] ) {
shell_exec( ‘cd /var/www/lambda.aaronjthompson/ && git checkout master && git reset –hard HEAD && git pull’ );
}

?>