<?php

// cachebust
function cachebust($path) {
	// if (app()->environment('local')) return mix($path);

	try
	{
		return $path . '?v=' . File::lastModified(public_path().$path);
	}
	catch (Exception $e)
	{
		return $path;
	}
}
