
## Women In Tech website. ##

Created by HackSoc http://www.hacksocnotts.co.uk/

Hosted at http://www.inspirewit.com/


## How to Build

- If you don't have Grunt, install it globally by running `sudo npm -g install grunt-cli` 
- In the project root directory, run `npm install`
- Running `grunt` will build the site
- Running `grunt watch` will detect any changes locally and rebuild the site
- To test the site locally, run `grunt serve`. This will build the site, serve it at `http://localhost:9000/index.html` and run a `grunt watch` alongside
    - Alternatively, you can specify the port to ie, 3000 by running `env SERVER_PORT=3000 grunt serve` 
- Build the site first by running `grunt` then run `grunt watch` or `grunt serve`

## Deploying changes

Changes are done via [Capistrano](http://capistranorb.com), which provides the ability to deploy really easily to our server.

In order to set up the dependencies, you will need to run `bundle install`. This requires `ruby` and `ruby-bundler`.

Changes *must* be sent to staging first, to be checked before being put live. This can be done by running `bundle exec cap staging deploy`, and can be found at [`staging.inspirewit.com`](staging.inspirewit.com).

Once confirmed that the changes are good, they can be sent live via `bundle exec cap production deploy`, and can be found at [`inspirewit.com`](inspirewit.com).

*NOTE*: In order to push to the server, you will need to be given SSH access via @jamietanna.

## TODO
- [ ] Tidy up SCSS
- [ ] Add [Bourbon.io](http://bourbon.io/) to ensure cross browser support
- [x] Move from PHP to static html
- [ ] Add promotional photos from last year

## LICENSE

InspireWiT is released under the [GNU General Public License V3](LICENSE.md).
