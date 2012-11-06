<?php

class Controller_Thumbnailer extends Controller_Base
{
	public function action_index()
	{
		try {
			$params = func_get_args();
			list ($width, $height) = explode('x', array_shift($params));
			if (!is_numeric($width) || !is_numeric($height)) {
				throw new HttpNotFoundException;
			}
			$path = implode('/', $params);
			Image::load(DOCROOT . $path)->
					crop_resize($width, $height)->
					output();
		} catch (Exception $e) {
			throw new HttpNotFoundException;
		}
	}
}
