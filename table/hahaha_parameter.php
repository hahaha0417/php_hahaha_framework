<?php

namespace hahaha;

/*
設計上，parameter主要用來傳遞參數
可以先在這邊初始化，或是需要傳東西時reference到變數
例如資料庫撈出的結果，可以存到這

可以用reference or copy array
重點 : reference比較快
如是php-fpm - 則使用前要先Release，這可能是上次的資料
*/
class hahaha_parameter
{	
	use hahaha_instance_trait;

	function __construct()
	{
		$this->Initial();
	}
	
	public function Initial()
	{
		
	}

	
}


