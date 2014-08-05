<?php

if ((isset($_POST['accept']) && $_POST['accept']=='yes')) {
    setcookie('restriction_accepted', '1', time() + Jojo::getOption('restricted_timeout', 31536000), '/', _SITEURL);
    $_SESSION['restriction_accepted'] = true;
} else if (isset($_COOKIE['restriction_accepted']) && $_COOKIE['restriction_accepted']==1) {
    $_SESSION['restriction_accepted'] = true;
} elseif (!isset($_SESSION['restriction_accepted']) || !$_SESSION['restriction_accepted']) {
    $_SESSION['restriction_accepted'] = false;
}
$smarty->assign('restriction_accepted', $_SESSION['restriction_accepted']);
$smarty->assign('restriction_local', (boolean)(Jojo::getOption('restrict_scope', 'global')=='local'));