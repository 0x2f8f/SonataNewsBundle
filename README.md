# Newsbundle

A blog plateform based on Doctrine2 and Symfony2.

## Installation

* Add SonataNewsBundle to your src/Bundle dir

        git submodule add git@github.com:sonata-project/NewsBundle.git src/Sonata/NewsBundle

* Add SonataNewsBundle to your application kernel

        // app/AppKernel.php
        public function registerBundles()
        {
            return array(
                // ...
                new Sonata\NewsBundle\SonataNewsBundle(),
                // ...
            );
        }

* Add SonataNewsBundle routes to your application routing.xml

    # app/config/routing.yml
    news:
        resource: '@SonataNewsBundle/Resources/config/routing/news.xml'
        prefix: /news
