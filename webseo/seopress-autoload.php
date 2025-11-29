<?php

defined( 'ABSPATH' ) || exit( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

spl_autoload_register(
        function ( $class ) {
                // project-specific namespace prefix.
                $prefix = 'WebSEO\\';

                // base directories for the namespace prefix. This covers the core plugin
                // and the bundled pro add-on assets that now share the `WebSEO` namespace.
                $base_dirs = array(
                        __DIR__ . '/src/',
                        __DIR__ . '/pro-addon/src/',
                );

                // does the class use the namespace prefix?
                $len = strlen( $prefix );
                if ( 0 !== strncmp( $prefix, $class, $len ) ) {
                        // no, move to the next registered autoloader.
                        return;
                }

                // get the relative class name.
                $relative_class = substr( $class, $len );

                foreach ( $base_dirs as $base_dir ) {
                        // replace the namespace prefix with the base directory, replace namespace separators with directory separators in the relative class name, append with .php.
                        $file = $base_dir . str_replace( '\\', '/', $relative_class ) . '.php';

                        // if the file exists, require it.
                        if ( file_exists( $file ) ) {
                                require $file;
                                return;
                        }
                }
        }
);
