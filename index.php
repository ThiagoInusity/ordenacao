<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>OrdenAÇÃO</title>
        <script type="text/javascript" src="jquery-1.2.6.min.js"></script>
        <link href="inettuts.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <script type="text/javascript">
        $('<style type="text/css">.column{visibility:hidden;}</style>').appendTo('head');
        $('body').css({background: '#ccc url(img/load.gif) no-repeat center'})
    </script>

    <div id="head">
        <h1>OrdenAÇÃO</h1>
    </div>
<?php
/*print_r($_COOKIE);
$dados = $_COOKIE['cookie2']; print_r($dados);die;
	mysql_connect("hostname", "root", "", "ordenacao");
	//mysql_db_query("INSERT INTO musicas ('nome','cor') VALUES ('','')");
*/
?>
    <div id="columns">

        <ul id="column1" class="column">
        </ul>

        <ul id="column2" class="column">
                    <li class="widget color-green" id="intro">
                <div class="widget-head">
                    <h3>Widget 1 title</h3>
                </div>
                <div class="widget-content">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam magna sem, fringilla in, commodo a, rutrum ut, massa. Donec id nibh eu dui auctor tempor. Morbi laoreet eleifend dolor. Suspendisse pede odio, accumsan vitae, auctor non, suscipit at, ipsum. Cras varius sapien vel lectus.</p>
                </div>
            </li>
            <li class="widget color-red" id="widget2">
                <div class="widget-head">
                    <h3>Widget 2 title</h3>
                </div>
                <div class="widget-content">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam magna sem, fringilla in, commodo a, rutrum ut, massa. Donec id nibh eu dui auctor tempor. Morbi laoreet eleifend dolor. Suspendisse pede odio, accumsan vitae, auctor non, suscipit at, ipsum. Cras varius sapien vel lectus.</p>
                </div>
            </li>
            <li class="widget color-blue" id="widget3">
                <div class="widget-head">
                    <h3>Widget 3 title</h3>
                </div>
                <div class="widget-content">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam magna sem, fringilla in, commodo a, rutrum ut, massa. Donec id nibh eu dui auctor tempor. Morbi laoreet eleifend dolor. Suspendisse pede odio, accumsan vitae, auctor non, suscipit at, ipsum. Cras varius sapien vel lectus.</p>
                </div>
            </li>
            <li class="widget color-yellow" id="widget4">
                <div class="widget-head">
                    <h3>Widget 4 title</h3>
                </div>
                <div class="widget-content">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam magna sem, fringilla in, commodo a, rutrum ut, massa. Donec id nibh eu dui auctor tempor. Morbi laoreet eleifend dolor. Suspendisse pede odio, accumsan vitae, auctor non, suscipit at, ipsum. Cras varius sapien vel lectus.</p>
                </div>
            </li>
            <li class="widget color-orange" id="widget5">
                <div class="widget-head">
                    <h3>Widget 5 title</h3>
                </div>
                <div class="widget-content">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam magna sem, fringilla in, commodo a, rutrum ut, massa. Donec id nibh eu dui auctor tempor. Morbi laoreet eleifend dolor. Suspendisse pede odio, accumsan vitae, auctor non, suscipit at, ipsum. Cras varius sapien vel lectus.</p>
                </div>
            </li>
            <li class="widget color-white" id="widget6">
                <div class="widget-head">
                    <h3>Widget 6 title</h3>
                </div>
                <div class="widget-content">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam magna sem, fringilla in, commodo a, rutrum ut, massa. Donec id nibh eu dui auctor tempor. Morbi laoreet eleifend dolor. Suspendisse pede odio, accumsan vitae, auctor non, suscipit at, ipsum. Cras varius sapien vel lectus.</p>
                </div>
            </li>
        </ul>

        <ul id="column3" class="column">
        </ul>

    </div>

    <script type="text/javascript" src="jquery-ui-personalized-1.6rc2.min.js"></script>
    <script type="text/javascript" src="cookie.jquery.js"></script>
    <script type="text/javascript" src="inettuts.js"></script>

</body>
</html>