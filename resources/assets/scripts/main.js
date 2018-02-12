// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"
import fontawesome from "@fortawesome/fontawesome";
import solid from '@fortawesome/fontawesome-free-solid';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

// Render Icons
fontawesome.library.add(solid);

fontawesome.dom.i2svg();
