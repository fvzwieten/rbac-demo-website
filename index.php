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
    echo "Served to you from: ";
    if ($host = 'webserver1') {
       echo '<span style="color:red;">', $host, '</span>';
    } else {
       echo '<span style="color:green;">', $host, '</span>';
    }
    echo $domain;
  ?>
</body>
</html>
