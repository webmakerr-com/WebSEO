<?php


namespace SEOPressPro\Services\StopWords;

class FinderStopWords
{

    protected $handlers;

    public function __construct(){
        $this->buildHandlers();
    }

    /**
     * @param string $language
     *
     * @return array
     */
    public function find($language)
    {
        $language = mb_strtolower($language);

        $filePath = $this->inHandlers($language);

        if(!$filePath){
            return [];
        }

        $result = json_decode(file_get_contents($filePath), true);

        return $result['words'];
    }

    protected function inHandlers($handler) {
        return isset($this->handlers[$handler]) ? $this->handlers[$handler] : null;
    }

    protected function buildHandlers()
    {
        $handlers = array();

        foreach ($this->getStopWordsDirectories() as $directory) {
            $fileList = preg_grep('~\.(json)$~', scandir($directory));

            foreach ($fileList as $item) {
                $filePath = sprintf('%s/%s', $directory, $item);
                $content  = json_decode(file_get_contents($filePath), true);

                if(isset($content['handlers'])){
                    foreach ($content['handlers'] as $contentHandler) {
                        $handlerKey = mb_strtolower($contentHandler);

                        if ( ! isset($handlers[$handlerKey])) {
                            $handlers[$handlerKey] = $filePath;
                        }
                    }
                }
            }
        }

        $this->handlers = $handlers;
    }

    private function getStopWordsDirectories() {
        $directories = array(
            WEBSEO_TEMPLATE_STOP_WORDS,
            defined('WEBSEO_LEGACY_PRO_TEMPLATE_STOP_WORDS') ? WEBSEO_LEGACY_PRO_TEMPLATE_STOP_WORDS : null,
            defined('SEOPRESS_PRO_LEGACY_TEMPLATE_STOP_WORDS') ? SEOPRESS_PRO_LEGACY_TEMPLATE_STOP_WORDS : null,
        );

        $themeDirectories = array(
            sprintf('%s/templates/stop-words', \get_stylesheet_directory()),
            sprintf('%s/pro-addon/templates/stop-words', \get_stylesheet_directory()),
            sprintf('%s/templates/stop-words', \get_template_directory()),
            sprintf('%s/pro-addon/templates/stop-words', \get_template_directory()),
        );

        $directories = webseo_apply_filters_compat(
            'webseo_stop_words_directories',
            'seopress_stop_words_directories',
            array_merge($directories, $themeDirectories)
        );

        return array_values(array_filter(array_unique(array_map('untrailingslashit', $directories)), 'is_dir'));
    }
}
