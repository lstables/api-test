<?php

$to = $_POST['to'];
$from = $_POST['from'];
$message = $_POST['message'];


echo "Message sent to " . $to;


echo "<script type=\"text/javascript\">
window._tracker = window._tracker || [];
_tracker.push(['set','API','tracking']);
_tracker.push(['set','ClientID','ke4egk3a']);
_tracker.push(['set','CampaignID', '000001']);
_tracker.push(['set', 'ConfirmationUrl', 'https://www.infinety.co.uk/thanks.html']);
_tracker.push(['send']);
</script>
<script src=\"https://api.moberce.co/js/tracker.js\"></script>";