<html>
<body>
  <?php
    header("Refresh: 1; url=$page");
    $fqdn = gethostname();
    $pos = strpos($fqdn,'.');
    $host = substr($fqdn, 0, $pos);
    $domain = substr($fqdn,$pos);
    $last = substr($host,-1);
    if ($last == '1') {
        $color = 'Red';
    } else {
        $color = 'Blue';
    }
  echo '<span style="color:', $color, ';">', $host, '</span>';
  echo '<div style="color:', $color, ';">';
  echo '<h1>Hello ACME!</h1>';
  echo '<h3>Website deployed using Ansible Tower</h3>';
  echo 'Served to you from: <span>', $host, '</span>';
  echo '</div>'
  ?>
</body>
</html>

