<html>
<body>
  <?php
    header("Refresh: 1; url=$page");
    $fqdn = gethostname();
    $pos = strpos($fqdn,'.');
    $host = substr($fqdn,$pos);
    $last = substr($host,-1);
    if ($last == '1') {
        $color = 'Red';
    } else {
        $color = 'Blue';
    }
  echo '<div style="color:', $color, ';">';
  echo '<h1>Welcome @ ACME cop</h1>';
  echo '<h2>Website deployed using Ansible Automation Platform</h2>';
  echo '<h3>Served to you from: <span>', $host, '</span></h3>';
  echo '</div>'
  ?>
</body>
</html>

