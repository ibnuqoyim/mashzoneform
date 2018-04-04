
<?php
/** 
 * CDRedirect
 * ==========
 *
 * Countdown Action Widget
 * 
 * 
 * Usage example:
 * 
 *
   $this->widget('ext.ecountdownaction.ECountdownAction',
        array(
          'seconds'=>8, //8 seconds
          'action'=>'{alert("hello world!")}',
        )
      );
 * 
 * 
 *
 * @version 0.1
 * @author ytannus
 */
class ECountdownAction extends CWidget
{
    public $seconds=0;
    public $action='';

    
    private $js = array(
        'jquery'
    );
    /** The css scripts to register.
     * @var array
     * @since 0.1
     */
    private $css = array(
        //'jquery.countdown.css',
    );

    /** The asset folder after published
     * @var string
     * @since 0.1
     */
    private $assets;

    private function publishAssets() 
    {
        $assets = dirname(__FILE__).DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR;
        $this->assets = Yii::app()->getAssetManager()->publish($assets);
    }

    private function registerScripts()
    {
        $cs = Yii::app()->clientScript;
        foreach($this->js as $file)
        {
            if(!$cs->isScriptRegistered($file))
                $cs->registerCoreScript($file);
        }        

        foreach($this->js as $file)
        {
            $cs->registerScriptFile($this->assets."/".$file, CClientScript::POS_HEAD);
        }
        foreach($this->css as $file)
        {
            $cs->registerCssFile($this->assets."/".$file);
        }
    }

    public function init()
    {
        $this->publishAssets();
        $this->registerScripts();

           
    }
    public function run()
    {
        echo '<span id="show-time">';
        echo $this->seconds;
        echo '</span>';
        
        echo '
            <script type="text/javascript">
                var settimmer = 0;
                $(function(){
                        timer = window.setInterval(function() {
                            var timeCounter = $("span[id=show-time]").html();
                            var updateTime = eval(timeCounter)- eval(1);
                            $("span[id=show-time]").html(updateTime);

                            if(updateTime == 0){
                                    '.$this->action.';
                                     clearInterval(timer);
                            }
                        }, 1000);
                });
            </script>';
        
    }
}
