<?php

declare(strict_types=1);

$files = explode(PHP_EOL, trim(`find icons -type f`));
sort($files);

?><html>
<head>
    <title>OC Icons List</title>
    <style>
        body{background-color: #0f253c; color: wheat;}
        table,tr,td{padding: 6px; border: 1px solid black;}
        a:link, a:active, a:focus, a:visited, a:hover {color:wheat;}
        img{max-height: 300px; border: 1px solid pink;}
    </style>
</head>
<body>
<h1>Opencaching.de Icon Repository</h1>
<ul>
    <li>Icons to use</li>
    <ul>
        <li><a href="#attributes">attributes</a> Cache attributes</li>
        <li><a href="#cacheTypes">cacheTypes</a> Cache type icons</li>
        <li><a href="#directions">directions</a> Pfeile in alle Himmelsrichtungen</li>
        <li><a href="#flags">flags</a></li>
        <li><a href="#logTypes">logTypes</a> Icons for logs on caches</li>
        <li><a href="#misc">misc</a> (viewcache, profile, misc, map, log, description, cachestatus, action)</li>
        <li><a href="#navigation">navigation</a> Icons speziell für die Navigation auf der Seite. Aktuell die zum Blättern.</li>
        <li><a href="#oclogos">oclogos</a> -> OC Logos</li>
        <li><a>ocnodes</a> (nodes) -> Andere OC Platformen</li>
        <li><a href="#ratings">ratings</a> (rating, difficulty) -> D/T rating, Empfehlungssterne, ...</li>
        <li><a href="#thirdparties">thirdparties</a> (media, geokrety) -> Alle Logos von anderen Seiten ausser OC Nodes</li>
        <li><a href="#wayPointTypes">wayPointTypes</a> Icons for way points</li>
    </ul>
</ul>

<?php

print '<h2>'.count($files).' SVGs</h2>'.PHP_EOL.'<table>'.PHP_EOL;
print '    <tr><th>Grapic</th><th>Group / Directory</th><th>Name</th><th>In use</th><th>Note</th></tr>'.PHP_EOL;

$lastGroup = '';
foreach ($files as $file) {
    $data = explode('/', $file);

    $id = '';
    if ($lastGroup !== $data[1]) {
        $id = sprintf(' id="%s"', $data[1]);
        $lastGroup = $data[1];
    }

    echo sprintf(
        '    <tr%1$s><td><img src="%2$s" width="100" /></td><td>%3$s</td><td>%4$s</td><td></td><td></td></tr>'.PHP_EOL,
        $id,
        $file,
        $data[1],
        $data[2],
    );
}

print '</table></body></html>'.PHP_EOL;
