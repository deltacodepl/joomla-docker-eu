{source}
<?php
$option = array();

$option['driver']   = 'mysql';
$option['host']     = 'localhost';
$option['user']     = '';
$option['password'] = '#';
$option['database'] = '';
$option['prefix']   = '';

$db = JDatabaseDriver::getInstance( $option );
$query = $db->getQuery(true);
$query->select('content');
$query->from($db->quoteName('#__modules'));
$query->where($db->quoteName('id')." = ".$db->quote(155));
$db->setQuery($query);
$column= $db->loadColumn();
echo($column[0]);
?>
{/source}