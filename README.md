
## Women In Tech website. ##

Created by HackSoc http://www.hacksocnotts.co.uk/

Hosted at http://www.inspirewit.com/

## Editing CSS or LESS

The CSS is post-processed using LESS. A task runner will be used in order to support this automatically, but for now, in order to adjust the stylings, the .less files will need to be manually compiled into .css files.

- Edit `style.less`
- To compile the LESS into CSS run: `lessc less/style.less css/style.css`, [more info can be found here](http://lesscss.org/usage/#command-line-usage-command-line-usage)


## Deploying changes

Changes are done via [Capistrano](http://capistranorb.com), which provides the ability to deploy really easily to our server.

In order to set up the dependencies, you will need to run `bundle install`. This requires `ruby` and `ruby-bundler`.

Changes *must* be sent to staging first, to be checked before being put live. This can be done by running `bundle exec cap staging deploy`, and can be found at [`staging.inspirewit.com`](staging.inspirewit.com).

Once confirmed that the changes are good, they can be sent live via `bundle exec cap production deploy`, and can be found at [`current.inspirewit.com`](current.inspirewit.com).

*NOTE*: In order to push to the server, you will need to be given SSH access via @jamietanna.

## TODO
- [ ] Move to GruntJS
- [ ] Remove Carousel
- [ ] Add promotional photos from last year, found on [HackSoc 2014/15 drive](https://drive.google.com/open?id=0B0BMWwh-HrjhOG9SbGJhRTY3X1k)
