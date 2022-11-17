<?php
	class Get {
		protected $gm;

		public function __construct(\PDO $pdo) {
			$this->gm = new GlobalMethods($pdo);
		}

        /*
            In this class, you can create several methods
        */
	}
?>