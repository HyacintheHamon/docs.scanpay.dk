$apikey = 'Your scanpay API key';
$scanpay = new Scanpay\Scanpay($apikey);

$localSeq = 22;
try {
    $obj = $scanpay->seq($localSeq);
    $maxSeq = $scanpay->maxSeq();
} catch (Exception $e) {
    die('Caught Scanpay client exception: ' . $e->getMessage() . "\n");
}

foreach ($obj['changes'] as $change) {
    print_r($change);
}
print_r('New local seq after applying all changes: ' . $obj['seq'] . "\n");
print_r('Max seq is ' . $maxSeq . "\n");

