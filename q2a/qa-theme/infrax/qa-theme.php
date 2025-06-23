<?php
/**
 * Custom Q2A theme approximating infrax.eadsc.ru style.
 */
class qa_html_theme extends qa_html_theme_base {
    protected $theme = 'infrax';

    // Override header block
    function header() {
        $this->output('<div class="qa-header">');
        $this->output('<div class="infrax-logo"><a href="'.qa_path_html('').'"><img src="'.qa_html($this->rooturl.'images/logo.png').'" alt="logo"></a></div>');
        $this->output('<div class="infrax-nav">');
        $this->nav('main');
        $this->output('</div>');
        $this->output('</div>');
    }

    // Basic body wrapper
    function body() {
        $this->output('<body>');
        $this->body_content();
        $this->output('</body>');
    }

    // Override footer block
    function footer() {
        $this->output('<div class="qa-footer">');
        $this->output('&copy; '.date('Y').' Infrax');
        $this->output(' | <a href="'.qa_path_html('privacy').'">Политика конфиденциальности</a>');
        $this->output(' | <a href="'.qa_path_html('contact').'">Контакты</a>');
        $this->output('</div>');
    }
}
?>