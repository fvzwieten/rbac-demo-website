<html>
<body>
  <?php
    header("Refresh: 1; url=$page");
    $website_config = parse_ini_file("/etc/ansible/facts.d/webserver.fact");
    $fqdn = gethostname();
    $version = $website_config['version'];
    $serial = $website_config['serial'];
    $colors = ["red","green","blue","purple","teal","fuchsia","coral","olive","navy"];
    $color = $colors[ ($version % 9) + $serial ];
    echo '<div style="color:', $color, ';">';

    echo '<h1>Welcome @ Demo company</h1>';

    echo '<h2>Website deployed using Ansible Automation Platform</h2>';

    echo '<h3>Served to you from: <span>', $fqdn, ' (version: ', $version, ')</span></h3>';

    echo '</div>';
  ?>
</body>
</html>
