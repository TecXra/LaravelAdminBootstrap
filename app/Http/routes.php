
<?php







foreach(File::allFiles(__DIR__.'/../Routes')as $partial)
{

require_once $partial->getPathname();

}