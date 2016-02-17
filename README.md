
## Women In Tech website. ##

Created by HackSoc http://www.hacksocnotts.co.uk/

Hosted at http://www.inspirewit.com/


## How to Build

- Uses Grunt
- Run `sudo npm install` in main directory
- Run `grunt watch` to watch folders so that SCSS compiles to CSS & JS combines, or just run `grunt` to build all.


## Deploying changes

Changes are done via [Capistrano](http://capistranorb.com), which provides the ability to deploy really easily to our server.

In order to set up the dependencies, you will need to run `bundle install`. This requires `ruby` and `ruby-bundler`.

Changes *must* be sent to staging first, to be checked before being put live. This can be done by running `bundle exec cap staging deploy`, and can be found at [`staging.inspirewit.com`](staging.inspirewit.com).

Once confirmed that the changes are good, they can be sent live via `bundle exec cap production deploy`, and can be found at [`current.inspirewit.com`](current.inspirewit.com).

*NOTE*: In order to push to the server, you will need to be given SSH access via @jamietanna.

## TODO
- [x] Move to GruntJS
- [x] Add grunt task running server side
- [x] Fix mobile dropdown menu
- [ ] Tidy up .scss files
- [ ] Add [Bourbon.io](http://bourbon.io/) to ensure cross browser support
- [ ] Move from PHP to static html
- [x] Remove Carousel
- [ ] Add promotional photos from last year, found on [HackSoc 2014/15 drive](https://drive.google.com/open?id=0B0BMWwh-HrjhOG9SbGJhRTY3X1k)
