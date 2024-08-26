<?php
function fqcnToPath(string $fqcn) {
    return str_replace('\\', '/', $fqcn) . '.php';
}

spl_autoload_register(function (string $class) {
    $path = fqcnToPath($class);

	if(file_exists(__DIR__ . '/../scripts.at.ivao.aero/src/' . $path)):
    	require __DIR__ . '/../scripts.at.ivao.aero/src/' . $path;
	endif;
});
?>