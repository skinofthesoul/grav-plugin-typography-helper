<?php
namespace Grav\Plugin;
use Grav\Common\Plugin;

/**
 * Class TypographyHelperPlugin
 * @package Grav\Plugin
 */
class TypographyHelperPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onAdminTwigTemplatePaths' => ['onAdminTwigTemplatePaths', 0]
        ];
    }

    public function onAdminTwigTemplatePaths($event)
    {
        $paths = $event['paths'];
        $paths[] = __DIR__ . '/admin/themes/grav/templates';
        $event['paths'] = $paths;
    }
}
