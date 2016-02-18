<?php


/**
 * Class Index
 *
 * Basic home class to test mvc
 */
class index extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //self::checkMember();
        $this->view->title = 'Vanier Robotics 2016';
    }

    public function index()
    {
		?>
		
		<script>
			if( /iPad/i.test(navigator.userAgent))
			{
				<?php
				$this->view->viewportOveride = '<meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=0.8, user-scalable=no"/>'; 
				?>
			}
			
			else if(/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
			{
				<?php
				$this->view->viewportOveride = '<meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=0.5, user-scalable=no"/>'; 
				?>
			}
			
			else
			{
				<?php
				$this->view->viewportOveride = '<meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=0.5, user-scalable=no"/>'; 
				?>
			}
		</script>
		<?php
		
        $this->view->render('language/index',true);
    }

}