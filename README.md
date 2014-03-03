# Offset

Offset is a WordPress starter kit that works with Bower/Grunt.

## Why Use Offset?

There a million different WordPress frameworks out there so what makes Offset unique? In short, it's because Offset stays out of your way. I have tried whenever possible to pick the most generic, widely applicable solutions for every WordPress site. Offset is not a theme so much as what WordPress should come with out of the box for custom theme developers.

Perhaps you've tried something like [Bones](http://themble.com/bones/) in the past and loved the ideas but perhaps you  Or perhaps you've even tried a more radical solution such as [Roots](http://roots.io/), which aggressively tries to modernize the WordPress workflow. I love Roots and I think a lot of the ideas are great, but it agressively changes some default functionality as well as using the Bootstrap framework which is pretty heavy stuff.

Roots even does some things which I'm fairly certain could interfere with particular plugins. I don't know this is the case but I can see it being possible as Roots changes things like menu classes. In theory a lot of the ideas are good like using a theme wrapper and cleaning up some of the code but it's not what people expect when coming from WordPress. People expect to exploit the template heirarchy on its own and already have preconceptions about how those things work. Despite my complete agreement with DRY, people also think a certain way about theme development because of years with WordPress.

I think there's a middle ground. I've made the simplest possible theme from scratch and kept the functionality as close to default as possible to not produce horrible code. This is not as hard now that WordPress has HTML5 comments and forms you can turn on. I've tried to break down the theme into the smallest practical logical units that are easily overridden.

Instead of the heavy Bootstrap framework, I've chosen the light and far less opinionated [inuit.css](http://inuitcss.com). I've linked all the style code to CSS classes so there are no framework-specific classes anywhere. In fact, I've chosen to intentionally avoid collisions with inuit so choosing a different CSS framework is literally as easy as deleting the Sass folder.

## Requirements

1. PHP 5.3+ with Composer
2. NPM
3. Ruby 1.9+

## How to Use Offset

1. You can clone or copy the offset folder into your themes folder. I've tried to make it compatible with child themes although I've not tested this.
2. `grunt install` will build your theme
3. I have `lib/scripts.php` set to `--assume-unchanged` using the Git command `update-index` because the changes are dependent on generated files. If you add something relevant to `lib/scripts.php`, be sure to set the file to `--no-assume-unchanged` and add the relevant changes, then re-set to `--assume-unchanged`
4. `grunt dev` will watch your files in development. If you want LiveReload there is scaffolding in place but I have not enabled it by default.

## Recommended Plugins

Since this theme is meant to be compatible with Bedrock, you should be using [WPackagist](http://wpackagist.org) to manage your WP.org plugins through Composer. For that reason, I've not included any sort of activation script to auto-install plugins but there are a few I would suggest you consider.

* Nice Search - <http://wordpress.org/plugins/nice-search/>
* Advanced Custom Fields - <http://wordpress.org/plugins/advanced-custom-fields/>
* Pods - <http://wordpress.org/plugins/pods/>
* Slim Jetpack - <https://wordpress.org/plugins/slimjetpack/>

## Updating WP-Bootstrap-Navwalker

In case you fork the project, wp-bootstrap-navwalker is added as a Git subtree. To update the code independently, use the command `git subtree pull --prefix lib/vendor/wp-bootstrap-navwalker https://github.com/twittem/wp-bootstrap-navwalker.git master --squash`

## Credits

Offset Printer Photo copyright [Philippe Teuwen](http://www.flickr.com/photos/doegox/1060145642)
Thanks to [_s](http://underscores.me/) and [Bones](http://themble.com/bones/) for inspiration and a few code snippets.
Thanks to [Roots Team](http://roots.io/) for Bedrock, which this package was refactored to work with and the brilliant Roots framework which was the also source of code and inspiration.
