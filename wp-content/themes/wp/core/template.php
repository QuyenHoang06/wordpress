<?php


class Template {

    protected $stack = [];

    protected $config = [];

    protected $sections = [];

    function __construct($config)
    {
        $this->config = $config;
    }

    function layout($name) {
        echo $this->render($name);
    }

    function section($name) {
        $name = array_pop($this->stack);
        if($name == '__header') {
            $this->sections[$name] = ob_get_clean();
        }

        if(ob_start()) {
            array_push($this->stack, $name);
        }
    }

    function stop() {
        $name = array_pop($this->stack);
        if($content = ob_get_clean()) {
            $this->sections[$name] = $content;
        }
    }

    function render($name) {
        if(ob_start()) {
            array_push($this->stack, 'layout');
        }

        include $this->config['root'].'/'.$name.'.php';

        $this->stop();


        return $this;
    }

    function __toString()
    {
        // TODO: Implement __toString() method.
        $content = '';
        foreach ($this->sections as $section) {
            $content .= $section;
        }
        return $content;
    }

    /**
     * @return array
     */
    public function getSections()
    {
        return $this->sections;
    }
}
