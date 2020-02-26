<html>
<body>

  <div><h1>Hello ACME!</h1></div>

  <div><h3>Website deployed using Ansible Tower</h3></div>
  <?php
    header("Refresh: 1; url=$page");
    $fqdn = gethostname();
    $pos = strpos($fqdn,'.');
    $host = substr($fqdn, 0, $pos);
    $domain = substr($fqdn,$pos);
    if (substr($host,-1) == '1') {
        $color = 'red';
    } else {
        $color = 'blue';
    }
    echo substr($host,-5);
    echo "Served to you from: ";
    echo '<span style="color:', $color, ';">', $host, '</span>';
    echo $domain;
  ?>
</body>
</html>

